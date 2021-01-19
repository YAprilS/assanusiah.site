<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_santri extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
    $this->load->model('m_datasantri');
    $this->load->library('mypdf');
  }

  public function index()
  {
    $data['title'] = 'Data Calon Santri';
    $data['topbar'] = 'Data Calon Santri';
    $data['data'] = $this->m_datasantri->getdatasantri();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/p_header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/datasantri', $data);
    $this->load->view('templates/p_footer');
}

  public function deletedatasantri()
  {
    $id = $this->input->post('id');
    $kirim = $this->m_datasantri->deletedatasantri($id);
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/data_santri');
  }

  public function delall()
  {
    
    $kirim = $this->m_datasantri->delall();
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/data_santri');
  }

  public function pdf()
  {
    $data['title'] = 'pdf';
    $data['data'] = $this->m_datasantri->getdatasantri();    
    $this->load->view('pdf', $data);
  }

  // public function cetak($id)
  // {
    
  //     $data = $this->db->get('pendaftaran')->result();
    
  //     $data = $this->db->get_where('pendaftaran', ['id' => $id])->result();
      
    
  //   $dt['pendaftaran'] = $data;
  //   $this->load->library('mypdf');
  //   $this->mypdf->generate('admin/data_santri/cetak', $dt, 'Kartu Peserta', 'A4', 'portrait');
  // }

    public function cetak($id){
      $data['data'] = $this->m_datasantri->getdatabyid($id)->row_array();
      $html = $this->load->view('pdf', $data, true);
      $this->mypdf->pdfgen($html, 'Kartu Peserta', 'A4', 'potrait');
    }

}