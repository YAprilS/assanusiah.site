<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();;
    $this->load->model('m_pengumuman');
    $this->load->helper('download');
  }

  public function index()
  {

    $data['data'] = $this->m_pengumuman->getallpengumuman();
    $data['title'] = 'Pengumuman';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/home_topbar1');
    $this->load->view('pengumuman', $data);
    $this->load->view('templates/home_footer');
  }

  function download($id)
  {
    
    $get_db = $this->m_pengumuman->get_file_byid($id);
    $q = $get_db->row_array();
    $file = $q['filenama'];
    $path = './assets/pengumuman/file/' . $file;
    $data =  file_get_contents($path);
    $name = $file;

    force_download($name, $data);
    redirect('pengumuman');
  }
}
