<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Models', 'm');
      cekuser();
   }

   public function index()
   {
      $table = 'user';
      $where = array(
         'id_user'      =>   $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);

      // $select = $this->db->select('*, count(kode_barang) as jumlahbarang');
      // $data['read']=$this->m->Get_All('barang',$select);
      $data['title'] = 'Reminder | Dashboard';
      // echo "Selamat Datang" . $data->nama;


      $this->load->view('templates/head', $data);
      $this->load->view('templates/navigation', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/dashboard', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/script', $data);
   }
}
