<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH.'external/phpexcel/PHPExcel.php';
require_once APPPATH.'external/phpexcel/PHPExcel/RichText.php';
require_once APPPATH.'external/phpexcel/PHPExcel/IOFactory.php';

class ExportExcel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models', 'm');
        date_default_timezone_set('Asia/Jakarta');
        cekuser();
    }
    public function export()
    {
        $table = 'user';
        $where = array(
            'id_user'      =>   $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);
        $data['title'] = 'Reminder | List Rekap Pasien';

        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->join('rekappasien', 'pasien.id_pasien = rekappasien.id_pasien', 'left');
        $this->db->join('kelurahan', 'pasien.id_kelurahan = kelurahan.id_kelurahan', 'left');
        $data['read'] = $this->db->get()->result();


        $select = $this->db->select('*');
        $select = $this->db->join('kelurahan', 'pasien.id_kelurahan = kelurahan.id_kelurahan', 'left');
        $data['pasien'] = $this->m->Get_All('pasien', $select);
//       dd($data['read']);
        $list = [];

        $min = $this->input->get('min') ? $this->input->get('min') : date('Y-m-d');
        $max = $this->input->get('max') ? $this->input->get('max') : date('Y-m-d');

        $start = new DateTime($min);
        $end = new DateTime($max);

        while ($start <= $end) {
            foreach ($data['pasien'] as $pasien) {
                $found = false;

                foreach ($data['read'] as $readData) {
                    $date = date('Y-m-d', strtotime($readData->create_date));

                    if ($readData->id_pasien == $pasien->id_pasien && $date == $start->format('Y-m-d')) {
                        $list[] = [
                            'id_rekap' => $readData->id_rekap,
                            'id_pasien' => $pasien->id_pasien,
                            'nama' => $pasien->nama,
                            'nik' => $pasien->nik,
                            'tanggallahir' => $pasien->tanggallahir,
                            'rt' => $pasien->rt,
                            'rw' => $pasien->rw,
                            'kelurahan' => $readData->nama_kelurahan,
                            'statuslapor' => $readData->statuslapor,
                            'statusmakan' => $readData->statusmakan,
                            'create_date' => $readData->create_date
                        ];
                        $found = true;
                        break;
                    }
                }

                if (!$found) {
                    $list[] = [
                        'id_rekap' => '',
                        'id_pasien' => $pasien->id_pasien,
                        'nama' => $pasien->nama,
                        'nik' => $pasien->nik,
                        'tanggallahir' => $pasien->tanggallahir,
                        'rt' => $pasien->rt,
                        'rw' => $pasien->rw,
                        'kelurahan' => $pasien->id_kelurahan == 0 ? '-' : $pasien->nama_kelurahan,
                        'statuslapor' => '0',
                        'statusmakan' => '2',
                        'create_date' => $start->format('Y-m-d')
                    ];
                }
            }

            $start->modify('+1 day');
        }

        $spreadsheet = new PHPExcel();
        $activeWorksheet = $spreadsheet->getActiveSheet();

        $activeWorksheet->mergeCells('A1:I1');

        $activeWorksheet->setCellValue('A1', 'Reminder | Data Rekap Pasien');

        $style = $activeWorksheet->getStyle('A1:I2');
        $style->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $style->getFont()->setBold(true);

        $styleArray = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
        );

        $activeWorksheet->getStyle('A2:I2')->applyFromArray($styleArray);

        $activeWorksheet->getStyle('A3:I' . (count($list) + 2))->applyFromArray($styleArray);

        $activeWorksheet->setCellValue('A2', 'Nama');
        $activeWorksheet->setCellValue('B2', 'NIK');
        $activeWorksheet->setCellValue('C2', 'Tanggal Lahir');
        $activeWorksheet->setCellValue('D2', 'RT/RW');
        $activeWorksheet->setCellValue('E2', 'Kelurahan');
        $activeWorksheet->setCellValue('F2', 'Sudah Lapor');
        $activeWorksheet->setCellValue('G2', 'Belum Lapor');
        $activeWorksheet->setCellValue('H2', 'Sudah Makan');
        $activeWorksheet->setCellValue('I2', 'Belum Makan');


        $activeWorksheet->getColumnDimension('A')->setWidth(15);
        $activeWorksheet->getColumnDimension('B')->setWidth(15);
        $activeWorksheet->getColumnDimension('C')->setWidth(15);
        $activeWorksheet->getColumnDimension('D')->setWidth(15);
        $activeWorksheet->getColumnDimension('E')->setWidth(20);
        $activeWorksheet->getColumnDimension('F')->setWidth(15);
        $activeWorksheet->getColumnDimension('G')->setWidth(15);
        $activeWorksheet->getColumnDimension('H')->setWidth(15);
        $activeWorksheet->getColumnDimension('I')->setWidth(15);


        $row = 3;

        foreach ($list as $item) {
            // Isi sel-sel dengan data sesuai kolom
            $activeWorksheet->setCellValue('A' . $row, $item['nama']);
            $activeWorksheet->setCellValueExplicit('B' . $row, $item['nik'], PHPExcel_Cell_DataType::TYPE_STRING);
            $activeWorksheet->setCellValue('C' . $row, $item['tanggallahir']);
            $activeWorksheet->setCellValue('D' . $row, $item['rt'] . '/' . $item['rw']);
            $activeWorksheet->setCellValue('E' . $row, $item['kelurahan']);

            if ($item['statuslapor'] == 1) {
                $activeWorksheet->getStyle('F' . $row)->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB(PHPExcel_Style_Color::COLOR_GREEN);
            }
            if($item['statuslapor'] == 0) {
                $activeWorksheet->getStyle('G' . $row)->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB(PHPExcel_Style_Color::COLOR_RED);
            }
            if ($item['statusmakan'] == 1) {
                $activeWorksheet->getStyle('H' . $row)->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB(PHPExcel_Style_Color::COLOR_YELLOW);
            }
            if ($item['statusmakan'] == 0) {
                $activeWorksheet->getStyle('I' . $row)->getFill()
                    ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
            }

            // Increment baris untuk data selanjutnya
            $row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="Data Rekap Pasien.xlsx"');

        $writer = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
        $writer->save('php://output');
    }
}