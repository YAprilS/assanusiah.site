<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Changepassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Ganti Password';
        $data['topbar'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/a_header', $data);
        $this->load->view('templates/user_sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/changepassword', $data);
        $this->load->view('templates/a_footer');
    }

  public function changepassword()
  {
    $data['title'] = 'Ganti Password';
    $data['topbar'] = 'Ganti Password';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('current_password', 'Current Password',
      'required|trim',
      [
        'required' => 'Masukkan Password Lama!'
      ]
    );
    $this->form_validation->set_rules('new_password1', 'New Password',
      'required|trim|min_length[3]|matches[new_password2]',
      [
        'matches' => 'Password Tidak Sama!',
        'required' => 'Masukkan Password Baru!'
      ]
    );
    $this->form_validation->set_rules('new_password2', 'Confirm New Password',
      'required|trim|min_length[3]|matches[new_password1]',
      [
        'matches' => 'Password Tidak Sama!',
        'required' => 'Masukkan Password Baru!'
      ]
    );

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/a_header', $data);
      $this->load->view('templates/user_sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/changepassword', $data);
      $this->load->view('templates/a_footer');
      
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password lama salah!</div>');
        redirect('user/changepassword');

      } else {
        // password baru sama dengan password lama
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password Lama!</div>');
          redirect('user/changepassword');

        } else {
          // password sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');

          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah!</div>');
          redirect('user/changepassword');
        }
      }
    }
  }

  }