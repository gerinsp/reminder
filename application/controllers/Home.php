<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Models', 'm');
   }

   function index()
   {
      $table = 'user';
      $where = array(
         'id_user'      =>   $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);
      $data['title'] = 'Reminder';


      $this->load->view('pages/home/home', $data);
      $this->load->view('templates/script', $data);
   }
   function validasinik()
   {
      $nik = $this->input->post('nik');

      $this->db->select('*');
      $this->db->where('nik', $nik);
      $jumlahdatapasien = $this->db->get('tbl_pasien');

      if ($jumlahdatapasien->num_rows() > 0) {
         date_default_timezone_set('Asia/Jakarta');
         $now = date('Y-m-d H:i:s');

         $this->db->select('*');
         $this->db->from('pasien');
         $this->db->where('nik', $this->input->post('nik'));
         $getpasien = $this->db->get()->result();

         foreach ($getpasien as $datapasien) {
            $idpasien = $datapasien->id_pasien;
         }

         $this->db->select('*');
         $this->db->where('id_pasien', $idpasien);
         $this->db->where('DATE(create_date)', date('y-m-d'));
         $rekappasien = $this->db->get('tbl_rekappasien');

//         if ($rekappasien->num_rows() == 0) {
//            $data = array(
//               'id_pasien'         =>   $idpasien,
//               'statuslapor'       =>   0,
//               'statusmakan'       =>   0,
//               'create_date'       =>   $now,
//            );
//
//            $this->m->Save($data, 'rekappasien');
//         }
      }
      echo $jumlahdatapasien->num_rows();
   }
   function saverekappasien()
   {
      date_default_timezone_set('Asia/Jakarta');
      $now = date('Y-m-d H:i:s');

      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->where('nik', $this->input->post('nik'));
      $getpasien = $this->db->get()->result();

      foreach ($getpasien as $datapasien) {
         $idpasien = $datapasien->id_pasien;
      }
      $this->db->select('*');
      $this->db->where('id_pasien', $idpasien);
      $this->db->where('statuslapor', 1);
      $this->db->where('DATE(create_date)', date('Y-m-d'));
      $datarekappasien = $this->db->get('tbl_rekappasien');

      if ($datarekappasien->num_rows() == 0) {
         $nik = $this->input->post('nik');
         if (isset($_POST['reminderMe'])) {
            /**
             * Store Login Credential
             */
            setcookie('nik', $nik, (time() + ((365 * 24 * 60 * 60) * 3)));
         } else {
            /**
             * Delete Login Credential
             */
            setcookie('nik', $nik, (time() - (24 * 60 * 60)));
         }

         if ($this->input->post('statusmakan') == "1") {
            $statusmakanSelected = 1; // Checkbox "Ya" dipilih
         } elseif ($this->input->post('statusmakan') == "0") {
            $statusmakanSelected = 0; // Checkbox "Tidak" dipilih
         }
         $table = 'rekappasien';
//         $where = array(
//            'id_pasien'         =>   $idpasien,
//         );
         $data = array(
            'id_pasien'         =>   $idpasien,
            'statuslapor'       =>   1,
            'statusmakan'       =>   $statusmakanSelected,
            'create_date'       =>   $now,
         );
         $this->m->Save($data, $table);
         $this->session->set_flashdata('success', 'Sudah berhasil lapor hari ini');
      } else {
         $nik = $this->input->post('nik');
         if (isset($_POST['reminderMe'])) {
            /**
             * Store Login Credential
             */
            setcookie('nik', $nik, (time() + ((365 * 24 * 60 * 60) * 3)));
         } else {
            /**
             * Delete Login Credential
             */
            setcookie('nik', $nik, (time() - (24 * 60 * 60)));
         }
         $this->session->set_flashdata('warning', 'Anda sudah lapor hari ini');
      }


      redirect('');
   }
}
