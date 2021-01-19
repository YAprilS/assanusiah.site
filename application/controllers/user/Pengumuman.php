<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
    $this->load->model('m_pengumuman');
    $this->load->helper('download');
  }

  public function index()
  {
    $data['title'] = 'Pengumuman';
    $data['topbar'] = 'Pengumuman';
    $data['data'] = $this->m_pengumuman->getallpengumuman();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/a_header', $data);
    $this->load->view('templates/user_sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/pengumuman', $data);
    $this->load->view('templates/a_footer');
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
    redirect('user/pengumuman');
  }
}
