<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Models', 'm');
   }
   public function index()
   {

      $this->form_validation->set_rules(
         'username',
         'Username',
         'required|trim',
         [
            'required' => 'Username Tidak Boleh Kosong',
         ]
      );
      $this->form_validation->set_rules(
         'password',
         'Password',
         'required|trim',
         [
            'required' => 'Password Tidak Boleh Kosong'
         ]
      );

      if ($this->form_validation->run() == false) {
         $data['title'] = "Reminder | Login ";
         $this->load->view('auth/header', $data);
         $this->load->view('auth/login');
         $this->load->view('auth/footer');
      } else {
         $this->_login();
      }
   }

   private function _login()
   {

      $user = [
         $username   =   $this->input->post('username'),
         $password   =   $this->input->post('password')

      ];
      $user = $this->m->Get_Where(['username' => $username], 'user');

      if ($user) {

         if ($user->is_active == 1) {

            if (password_verify($password, $user->password)) {

               $data = [
                  'id_user' => $user->id_user,
                  'username' => $user->username,
                  'role_id' => $user->role_id,
                  'nama' => $user->nama
               ];

               if (isset($_POST['rememberMe'])) {
                  /**
                   * Store Login Credential
                   */
                  setcookie('username', $username, (time() + ((365 * 24 * 60 * 60) * 3)));
                  setcookie('password', $password, (time() + ((365 * 24 * 60 * 60) * 3)));
               } else {
                  /**
                   * Delete Login Credential
                   */
                  setcookie('username', $username, (time() - (24 * 60 * 60)));
                  setcookie('password', $password, (time() - (24 * 60 * 60)));
               }
               $this->session->set_userdata($data);
               // $this->session->set_flashdata('success', 'Anda berhasil login');
               redirect('dashboard');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
               redirect('login');
            }
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Tidak Aktif<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
            redirect('login');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Tidak Terdaftar<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
         redirect('login');
      }
   }
   public function registration()
   {
      if ($this->session->userdata('username')) {
         if ($this->session->userdata('role_id') == 1) {
            redirect('administrator');
         }
         if ($this->session->userdata('role_id') == 2) {
            redirect('siswa');
         } else {
            redirect('login');
         }
      };
      $this->form_validation->set_rules(
         'nama',
         'Name',
         'required|trim',
         [
            'required' => 'Nama Tidak Boleh Kosong'
         ]
      );
      $this->form_validation->set_rules(
         'provinsi',
         'provinsi',
         'required|trim',
         [
            'required' => 'Provinsi Tidak Boleh Kosong'
         ]
      );
      $this->form_validation->set_rules(
         'kota',
         'kota',
         'required|trim',
         [
            'required' => 'Kota Tidak Boleh Kosong'
         ]
      );
      $this->form_validation->set_rules(
         'kecamatan',
         'kecamatan',
         'required|trim',
         [
            'required' => 'Kecamatan Tidak Boleh Kosong'
         ]
      );
      $this->form_validation->set_rules(
         'alamat',
         'alamat',
         'required|trim',
         [
            'required' => 'Alamat Tidak Boleh Kosong'
         ]
      );
      $this->form_validation->set_rules(
         'username',
         'username',
         'required|trim|valid_username|is_unique[user.username]',

         [
            'required' => 'username Tidak Boleh Kosong',
            'valid_username' => 'Format username Harus Sesuai',
            'is_unique' => 'username Sudah Terdaftar'
         ]
      );
      $this->form_validation->set_rules(
         'password1',
         'Password',
         'required|trim|min_length[5]|matches[password2]',
         [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password minimal 5 karakter',
            'required' => 'Password Tidak Boleh Kosong'
         ]
      );
      $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

      if ($this->form_validation->run() == false) {

         // $data['kodesiswa']       = $this->m->kodesiswa();
         // $data['kodependaftaran'] = $this->m->kodependaftaran();

         $data['title'] = "Reminder | Daftar Akun";
         $this->load->view('auth/header', $data);
         $this->load->view('auth/registration');
         $this->load->view('auth/script');
      } elseif ($this->input->post('kota') != "Sidoarjo" and $this->input->post('kota') != "sidoarjo" and $this->input->post('kota') != "Surabaya" and $this->input->post('kota') != "surabaya") {

         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf cabang kami belum ada di kota anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
         redirect('registrasi');
      } else {

         $data = array(

            'nama'           =>   htmlspecialchars($this->input->post('nama', true)),
            'username'          =>   htmlspecialchars($this->input->post('username', true)),
            'image'          =>   'default.png',
            'password'       =>   password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id'        =>   '4',
            'is_active'      =>   '1',
            'tanggal_daftar' =>   date('y-m-d'),
            'provinsi'       =>   $this->input->post('provinsi'),
            'kota'           =>   $this->input->post('kota'),
            'kecamatan'      =>   $this->input->post('kecamatan'),
            'alamat'         =>   $this->input->post('alamat'),
         );
         $this->m->Save($data, 'user');


         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah berhasil dibuat, Silahkan login<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div> ');
         redirect('login');
      }
   }

   public function logout()
   {

      session_start();
      session_destroy();
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('role_id');
      $this->session->set_flashdata('success', 'Anda berhasil logout');
      redirect('login');
   }
   public function blocked()
   {
      $table = 'user';
      $where = array(
         'id_user'      =>   $this->session->userdata('id_user')
      );


      $data['user'] = $this->m->Get_Where($where, $table);
      $data['title'] = 'Akses Ditolak';
      $this->load->view('auth/header', $data);
      $this->load->view('auth/blocked');
      $this->load->view('auth/script');
   }
}
