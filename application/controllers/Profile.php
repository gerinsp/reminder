<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Models', 'm');
      cekuser();
   }
   public function profile()
   {
      $role_id = $this->session->userdata('role_id');
      $table = 'user';
      $where = array(
         'id_user'       =>  $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);
      $data['title'] = 'Reminder | Profile';

      $this->load->view('templates/head', $data);
      $this->load->view('templates/navigation', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('pages/profile/profile', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/script', $data);
   }
   public function edit()
   {
      $role_id = $this->session->userdata('role_id');

      $table = 'user';
      $where = array(
         'id_user'        =>    $this->input->post('id')
      );
      $data = array(
         'nama'          => $this->input->post('name'),
         'username'           => $this->input->post('username'),
      );

      //cek jika ada gambar yg akan diupload
      $upload_image = $_FILES['image']['name'];
      if ($upload_image) {
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
         $config['max_size'] = '2048';
         $config['upload_path'] = './assets/img/profile';

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('image')) {
            $old_image = $data['user']['image'];
            if ($old_image != 'default.jpg') {
               unlink(FCPATH . 'assets/img/profile' . $old_image);
            }

            $new_image = $this->upload->data('file_name');
            $this->db->set('image', $new_image);
         } else {
            echo $this->upload->display_errors();
         }
      }

      $this->m->Update($where, $data, $table);

      $this->session->set_flashdata('success', 'Profil berhasil diubah');
      redirect('profile');
   }

   public function changePassword()
   {
      $role_id = $this->session->userdata('role_id');
      $data['title'] = 'Reminder | Ubah Password';
      $table = 'user';
      $where = array(
         'id_user'       =>  $this->session->userdata('id_user')
      );

      $data['user'] = $this->m->Get_Where($where, $table);



      $this->form_validation->set_rules(
         'current_password',
         'Current Password',
         'required|trim',
         [
            'required' => 'Password lama tidak boleh kosong'
         ]
      );

      $this->form_validation->set_rules(
         'new_password1',
         'New Password',
         'required|min_length[5]|matches[new_password2]',
         [
            'required' => 'Password baru tidak boleh kosong',
            'matches'  => 'Password tidak sama',
            'min_length' => 'Password minimal 5 karakter',
         ]
      );

      $this->form_validation->set_rules(
         'new_password2',
         'Confirm New Password',
         'required|min_length[5]|matches[new_password1]|trim',
         [
            'required' => 'Password baru tidak boleh kosong',
            'matches'  => 'Password Tidak Sama',
            'min_length' => 'Password minimal 5 karakter',
         ]
      );
      if ($this->form_validation->run() == false) {


         $this->load->view('templates/head', $data);
         $this->load->view('templates/navigation', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('pages/profile/profile', $data);
         $this->load->view('templates/footer');
         $this->load->view('templates/script', $data);
      } else {
         $current_password = $this->input->post('current_password');
         $new_password = $this->input->post('new_password1');
         $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

         if (!password_verify($current_password, $data['user']['password'])) {
            $this->session->set_flashdata('error', 'Password lama salah!');
            redirect('profile');
         } else {
            if ($current_password == $new_password) {
               $this->session->set_flashdata('error', 'Password baru tidak boleh sama dengan password lama!');
               redirect('profile');
            } else {
               //password ok
               $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

               $table = 'user';
               $where = array(
                  'username' => $this->session->userdata('username')
               );
               $data = array(
                  'password' =>    $password_hash
               );
               $this->m->Update($where, $data, $table);
               $this->session->set_flashdata('success', 'Password berhasil diubah!');
               redirect('profile');
            }
         }
      }
   }
}
