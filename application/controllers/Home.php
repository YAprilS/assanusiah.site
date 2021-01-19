<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/home_topbar');
    $this->load->view('home');
    $this->load->view('templates/home_footer1');
  }
}
