<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Kontak';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/home_topbar1');
    $this->load->view('kontak');
    $this->load->view('templates/home_footer');
  }
}
