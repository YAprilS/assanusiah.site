<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Profil';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/home_topbar1');
    $this->load->view('profil');
    $this->load->view('templates/home_footer');
  }
}
