<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
    $this->load->model('m_pengguna');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Pengguna';
    $data['topbar'] = 'Pengguna';
    $data['pengguna'] = $this->m_pengguna->getallpengguna();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/p_header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/pengguna', $data);
    $this->load->view('templates/p_footer');
  }

  public function deletepengguna()
  {
    $id = $this->input->post('id');
    $kirim = $this->m_pengguna->deletepengguna($id);
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/pengguna');
  }

  public function updatepass()
  {
    $newpass = $this->input->post('pass');
    $pass = password_hash($newpass, PASSWORD_DEFAULT);
    $id = $this->input->post('id');
    $kirim = $this->m_pengguna->updatepass($id, $pass);
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Diupdate</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diupdate</div>');
    }
    redirect('admin/pengguna');
  }

  public function registration()
  {

    $this->form_validation->set_rules('name', 'Name',
      'required|trim',
      [
        'required' => 'Masukkan Nama!'
      ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'Email ini telah terdaftar!',
      'required' => 'Masukkan Email!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password Tidak Sama!',
      'min_length' => 'Password Terlalu Pendek (minimal 3 karakter)!',
      'required' => 'Masukkan Password!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]'
    );
    $this->form_validation->set_rules('level', 'Level', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Pengguna';
      $data['topbar'] = 'Pengguna';
      $data['pengguna'] = $this->m_pengguna->getallpengguna();
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/p_header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/pengguna', $data);
      $this->load->view('templates/p_footer');
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email telah terdaftar! Data gagal disimpan</div>');
    } else {
      $this->m_pengguna->TambahData();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
      redirect('admin/pengguna');
    }
  }
}
