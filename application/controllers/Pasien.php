<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Models', 'm');

      date_default_timezone_set('Asia/Jakarta');
      cekuser();
   }

   function listpasien()
   {
      $table = 'user';
      $where = array(
         'id_user'      =>   $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);
      $data['title'] = 'Reminder | List Pasien';

       $select = $this->db->select('*');
       $select = $this->db->join('kelurahan', 'pasien.id_kelurahan = kelurahan.id_kelurahan', 'left');
       $data['read'] = $this->m->Get_All('pasien', $select);

      $this->load->view('templates/head', $data);
      $this->load->view('templates/navigation', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('pages/pasien/listpasien', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/script', $data);
   }

   function createpasien()
   {

      $this->form_validation->set_rules(
         'namapasien',
         'namapasien',
         'required|trim',
         [
            'required' => 'Field nama pasien tidak boleh kosong'
         ]
      );
      $this->form_validation->set_rules(
         'nik',
         'nik',
         'required|trim',
         [
            'required' => 'Field nik tidak boleh kosong'
         ]
      );
      $this->form_validation->set_rules(
         'tanggallahir',
         'tanggallahir',
         'required|trim',
         [
            'required' => 'Field tanggal lahir tidak boleh kosong'
         ]
      );
      $this->form_validation->set_rules(
         'rt',
         'rt',
         'required|trim',
         [
            'required' => 'Field rt tidak boleh kosong'
         ]
      );
      $this->form_validation->set_rules(
         'rw',
         'rw',
         'required|trim',
         [
            'required' => 'Field rw tidak boleh kosong'
         ]
      );
       $this->form_validation->set_rules(
           'id_kelurahan',
           'id_kelurahan',
           'required|trim',
           [
               'required' => 'Field kelurahan tidak boleh kosong'
           ]
       );

       $kelurahan = $this->db->select('*');
       $data['kelurahan'] = $this->m->Get_All('kelurahan', $kelurahan);

       $data['kelurahan'][count($data['kelurahan'])] = (object) [
           'id_kelurahan' => 0,
           'nama_kelurahan' => 'Lainnya'
       ];

      if ($this->form_validation->run() == false) {
         $role_id = $this->session->userdata('role_id');

         $table = 'user';
         $where = array(
            'id_user'      =>   $this->session->userdata('id_user')
         );

         $data['user'] = $this->m->Get_Where($where, $table);
         $data['title'] = 'Reminder | Tambah Data Pasien';


         $this->load->view('templates/head', $data);
         $this->load->view('templates/navigation', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('pages/pasien/createpasien', $data);
         $this->load->view('templates/footer');
         $this->load->view('templates/script', $data);
      } else {
         date_default_timezone_set('Asia/Jakarta');
         $now = date('Y-m-d H:i:s');

         $data = array(
             'nama'              =>   $this->input->post('namapasien'),
             'nik'               =>   $this->input->post('nik'),
             'tanggallahir'      =>   $this->input->post('tanggallahir'),
             'id_kelurahan'      =>   $this->input->post('id_kelurahan'),
             'rt'                =>   $this->input->post('rt'),
             'rw'                =>   $this->input->post('rw'),
         );

         $this->m->Save($data, 'pasien');

         $this->session->set_flashdata('success', 'Data pasien berhasil ditambah');
         redirect('listpasien');
      }
   }
   function editpasien($id_pasien)
   {

      $data = [
         'title' => 'Reminder | Edit Data Pasien'
      ];
      $role_id = $this->session->userdata('role_id');

      $table = 'user';
      $where = array(
         'id_user'      =>   $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);

       $select = $this->db->select('*');
       $select = $this->db->join('kelurahan', 'pasien.id_kelurahan = kelurahan.id_kelurahan', 'left');
       $select = $this->db->where('id_pasien', $id_pasien);
       $data['pasien'] = $this->m->Get_All('pasien', $select);

       $kelurahan = $this->db->select('*');
       $data['kelurahan'] = $this->m->Get_All('kelurahan', $kelurahan);

       $data['kelurahan'][count($data['kelurahan'])] = (object) [
           'id_kelurahan' => 0,
           'nama_kelurahan' => 'Lainnya'
       ];

      $this->load->view('templates/head', $data);
      $this->load->view('templates/navigation', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('pages/pasien/updatepasien', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/script', $data);
   }

   function updatepasien()
   {
      date_default_timezone_set('Asia/Jakarta');
      $now = date('Y-m-d H:i:s');

      $table = 'pasien';
      $where = array(
         'id_pasien'          =>   $this->input->post('idpasien')
      );

      $data = array(
         'nama'             =>   $this->input->post('namapasien'),
         'nik'              =>   $this->input->post('nik'),
         'tanggallahir'     =>   $this->input->post('tanggallahir'),
         'id_kelurahan'     =>   $this->input->post('id_kelurahan'),
         'rt'               =>   $this->input->post('rt'),
         'rw'               =>   $this->input->post('rw'),
      );
      $this->m->Update($where, $data, $table);

      $this->session->set_flashdata('success', 'Data pasien berhasil diubah');
      redirect('listpasien');
   }
   function deletepasien()
   {
      $table = 'pasien';
      $where = array(
         'id_pasien'          =>   $this->input->post('id')
      );

      $this->m->Delete($where, $table);



      $this->session->set_flashdata('success', 'Data pasien berhasil dihapus');
      redirect('listpasien');
   }
}
