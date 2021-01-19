<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
    $this->load->model('m_pengumuman');
    $this->load->library('upload');
    $this->load->helper('download');
  }
  public function index()
  {
    $data['title'] = 'Pengumuman';
    $data['topbar'] = 'Pengumuman';
    $data['data'] = $this->m_pengumuman->getallpengumuman();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/a_header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/pengumuman', $data);
    $this->load->view('templates/a_footer');

    // array('error' => '') ,
  }




  function simpan_file()
  {
    $config['upload_path'] = './assets/pengumuman/file/'; //path folder
    $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip|xls|xlsx|csv'; //type yang dapat diakses bisa anda sesuaikan
    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['filenama']['name'])) {
      if ($this->upload->do_upload('filenama')) {
        $gbr = $this->upload->data();
        $file = $gbr['file_name'];
        $deskripsi = $this->input->post('xdeskripsi');
        
        $this->m_pengumuman->simpan_file($file, $deskripsi);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('admin/pengumuman');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Extensi File Salah! Data Gagal Ditambahkan</div>');
        redirect('admin/pengumuman');
      }
    } else {
      redirect('admin/pengumuman');
    }
  }

  public function delete()
  {
    $id = $this->input->post('id');
    $kirim = $this->m_pengumuman->delete($id);
    if ($kirim == TRUE) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/pengumuman');
  }

  function download()
  {
    $id = $this->uri->segment(4);
    $get_db = $this->m_pengumuman->get_file_byid($id);
    $q = $get_db->row_array();
    $file = $q['filenama'];
    $path = './assets/pengumuman/file/' . $file;
    $data =  file_get_contents($path);
    $name = $file;

    force_download($name, $data);
    redirect('admin/pengumuman');
  }

}