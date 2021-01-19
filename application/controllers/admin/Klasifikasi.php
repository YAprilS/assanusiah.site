<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klasifikasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
    $this->load->model('m_klasifikasi');
    $this->load->model('m_datasantri');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Klasifikasi';
    $data['topbar'] = 'Klasifikasi';
    $data['hasil'] = $this->m_klasifikasi->getallklasifikasi();
    $data['data'] = $this->m_datasantri->getdatasantri();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/p_header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/klasifikasi', $data);
    $this->load->view('templates/p_footer');
  }

  public function tambahdata()
  {
    $this->form_validation->set_rules('kode','Kode',
      'required|trim|is_unique[klasifikasi.nisn]',
      [
        'is_unique' => 'NISN ini telah terdaftar!',
        'required' => 'Masukkan NISN!'
      ]
    );
    $this->form_validation->set_rules('nama','Nama', 'required|trim'
    );
    $this->form_validation->set_rules('nilai1','Nilai1','required|trim',
      [
        'required' => 'Masukkan Nilai!'
      ]
    );
    $this->form_validation->set_rules('nilai2','Nilai2','required|trim',
      [
        'required' => 'Masukkan Nilai!'
      ]
    );
    $this->form_validation->set_rules('nilai3','Nilai3','required|trim',
      [
        'required' => 'Masukkan Nilai!'
      ]
    );

    if ($this->form_validation->run() == false) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal disimpan! Periksa kembali form tambah data!</div>');
      $data['title'] = 'Klasifikasi';
      $data['topbar'] = 'Klasifikasi';
      $data['hasil'] = $this->m_klasifikasi->getallklasifikasi();
      $data['data'] = $this->m_datasantri->getdatasantri();
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/p_header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/klasifikasi', $data);
      $this->load->view('templates/p_footer');
      
    } else {
      $this->m_klasifikasi->tambahdata();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
      redirect('admin/klasifikasi');
    }
  }

  public function delete()
  {
    $id = $this->input->post('id');
    $kirim = $this->m_klasifikasi->delete($id);
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/klasifikasi');
  }

  function get_nisn()
  {
    $kode = $this->input->post('kode');
    $data = $this->m_klasifikasi->get_data_bykode($kode);
    echo json_encode($data);
  }

  public function delall()
  {

    $kirim = $this->m_klasifikasi->delall();
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/klasifikasi');
  }

}