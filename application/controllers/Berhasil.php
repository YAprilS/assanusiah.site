<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berhasil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_pendaftaran');
    $this->load->model('m_datasantri');
    $this->load->library('form_validation');
  }
  public function index()
  {

    $data['data'] = $this->m_pendaftaran->getdata();
    $this->load->view('berhasil', $data);
  }
}
