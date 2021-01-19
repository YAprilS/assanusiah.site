<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
    $this->load->model('m_monitoring');
  }
  public function index()
  {
    $data['title'] = 'Monitoring';
    $data['topbar'] = 'Monitoring';
    $data['data'] = $this->m_monitoring->getallmonitoring();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/a_header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/monitoring', $data);
    $this->load->view('templates/m_footer');
  }

  public function tambahdata()
  {
    $this->form_validation->set_rules(
      'kode',
      'Kode',
      'required|trim',
      [
        'required' => 'Masukkan Email!'
      ]
    );
    $this->form_validation->set_rules('nama', 'Nama', 'trim');
    $this->form_validation->set_rules(
      'pelanggaran',
      'Pelanggaran',
      'required|trim',
      [
        'required' => 'Masukkan Pelanggaran!'
      ]
    );
    $this->form_validation->set_rules(
      'prestasi',
      'Prestasi',
      'required|trim',
      [
        'required' => 'Masukkan Prestasi!'
      ]
    );
    $this->form_validation->set_rules(
      'hafalan',
      'Hafalan',
      'required|trim',
      [
        'required' => 'Masukkan Hafalan!'
      ]
    );
    $this->form_validation->set_rules(
      'spp',
      'Spp',
      'required|trim',
      [
        'required' => 'Masukkan Jumlah Tunggakan SPP!'
      ]
    );

    if ($this->form_validation->run() == false) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal disimpan! email telah terdata</div>');
      $data['title'] = 'Monitoring';
      $data['topbar'] = 'Monitoring';
      $data['data'] = $this->m_monitoring->getallmonitoring();
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/a_header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/monitoring', $data);
      $this->load->view('templates/m_footer');
    } else {
      $this->m_monitoring->tambahdata();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
      redirect('admin/monitoring');
    }
  }

  function get_email()
  {
    $kode = $this->input->post('kode');
    $data = $this->m_monitoring->get_data_bykode($kode);
    echo json_encode($data);
  }

  public function deletemonitoring()
  {
    $id = $this->input->post('id');
    $kirim = $this->m_monitoring->deletemonitoring($id);
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/monitoring');
  }

}
