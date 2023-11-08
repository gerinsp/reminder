<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RekapPasien extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Models', 'm');

      date_default_timezone_set('Asia/Jakarta');
      cekuser();
   }

   function listrekappasien()
   {
       $tgl_awal = $this->input->post('min') ? $this->input->post('min') : date('Y-m-d');
       $tgl_akhir = $this->input->post('max') ? $this->input->post('max') : date('Y-m-d');
//       dd($tgl_awal);
       $data['min'] = $tgl_awal;
       $data['max'] = $tgl_akhir;

      $table = 'user';
      $where = array(
         'id_user'      =>   $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);
      $data['title'] = 'Reminder | List Rekap Pasien';

      $select = $this->db->select('*');
      $select = $this->db->join('pasien', 'pasien.id_pasien = rekappasien.id_pasien');
      $data['read'] = $this->m->Get_All('rekappasien', $select);

      $pasien = $this->db->select('*');
      $data['pasien'] = $this->m->Get_All('pasien', $pasien);
//       dd($data['read']);
       $list = [];
       $start = new DateTime($tgl_awal);
       $end = new DateTime($tgl_akhir);

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
                       'statuslapor' => '0',
                       'statusmakan' => '2',
                       'create_date' => $start->format('Y-m-d')
                   ];
               }
           }

           $start->modify('+1 day');
       }


       $data['listpasien'] = $list;

      $this->load->view('templates/head', $data);
      $this->load->view('templates/navigation', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('pages/rekappasien/listrekappasien', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/script', $data);
   }
}
