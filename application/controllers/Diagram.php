<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagram extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models', 'm');
        cekuser();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $tgl_awal = $this->input->post('min') ? $this->input->post('min') : date('Y-m-d');
        $tgl_akhir = $this->input->post('max') ? $this->input->post('max') : date('Y-m-d');

        $data['min'] = $tgl_awal;
        $data['max'] = $tgl_akhir;

        $table = 'user';
        $where = array(
            'id_user'      =>   $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);

        // $select = $this->db->select('*, count(kode_barang) as jumlahbarang');
        // $data['read']=$this->m->Get_All('barang',$select);
        $data['title'] = 'Reminder | Diagram';
        // echo "Selamat Datang" . $data->nama;

        $table = 'user';
        $where = array(
            'id_user'      =>   $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);
        $data['title'] = 'Reminder | List Rekap Pasien';

        $select = $this->db->select('*');
        $select = $this->db->join('pasien', 'pasien.id_pasien = rekappasien.id_pasien');
        $select = $this->db->where('DATE(create_date) BETWEEN ' . $this->db->escape($tgl_awal) . ' AND ' . $this->db->escape($tgl_akhir));
        $data['read'] = $this->m->Get_All('rekappasien', $select);
//        dd($data['read']);
        $pasien = $this->db->select('*');
        $data['pasien'] = $this->m->Get_All('pasien', $pasien);
//        dd($data['read'][0]->id_pasien === $data['pasien'][1]->id_pasien);
        $dataLapor = [
            0 => 0,
            1 => 0
        ];
        $start = new DateTime($tgl_awal);
        $end = new DateTime($tgl_akhir);

        while ($start <= $end) {
        foreach ($data['pasien'] as $pasien) {
            $found = false; // Menandai apakah pasien memiliki data di "read"

            if ($data['read']) {
                foreach ($data['read'] as $value) {
                    $date = date('Y-m-d', strtotime($value->create_date));
                    if ($value->id_pasien === $pasien->id_pasien && $date === $start->format('Y-m-d')) {
                        $found = true;
                        break;
                    }
                }
            }

            if ($found) {
                $dataLapor[0] += 1;
            } else {
                $dataLapor[1] += 1;
            }
        }
            $start->modify('+1 day');
        }

        $dataMakan = [
            0 => 0,
            1 => 0
        ];

        foreach ($data['read'] as $value) {
            if ($value->statusmakan == 1) {
                $dataMakan[0] += 1;
            } else {
                $dataMakan[1] += 1;
            }
        }

        $data['pieDataLapor'] = [
            'labels' => ["Sudah Lapor", "Belum Lapor"],
            'datasets' => [
                [
                    'data' => $dataLapor, // Contoh data
                    'backgroundColor' => ['#36AE7C', '#DF2E38'], // Warna
                    'hoverOffset' => 4
                ],
            ],
        ];

        $data['pieDataMakan'] = [
            'labels' => ["Sudah Makan", "Belum Makan"],
            'datasets' => [
                [
                    'data' => $dataMakan, // Contoh data
                    'backgroundColor' => ['#FFC436', '#3085C3'], // Warna
                    'hoverOffset' => 4
                ],
            ],
        ];

        $data['lapor'] = $dataLapor;
        $data['makan'] = $dataMakan;

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navigation', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/diagram/diagram', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/script', $data);
    }
}