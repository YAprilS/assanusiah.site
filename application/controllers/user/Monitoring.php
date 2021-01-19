<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
    $this->load->model('m_monitoring');
  }

  public function index()
  {
    $data['title'] = 'Monitoring';
    $data['topbar'] = 'Monitoring';
    // $data['data'] = $this->m_monitoring->getall();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['monitoring'] = $this->db->get_where('monitoring', ['email' => $this->session->userdata('email')]);
    $this->load->view('templates/a_header', $data);
    $this->load->view('templates/user_sidebar');
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/monitoring', $data);
    $this->load->view('templates/a_footer');
  }
}
