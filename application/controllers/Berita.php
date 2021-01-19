<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_berita');
  }

  public function index()
  {
    $jum = $this->m_berita->get_all_berita();
    $page = $this->uri->segment(3);
    if (!$page) :
      $offset = 0;
    else :
      $offset = $page;
    endif;
    $limit = 5;
    $config['base_url'] = base_url() . 'berita/index/';
    $config['total_rows'] = $jum->num_rows();
    $config['per_page'] = $limit;
    $config['uri_segment'] = 3;
    //Tambahan untuk styling
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['next_link'] = 'Next >>';
    $config['prev_link'] = '<< Prev';
    $this->pagination->initialize($config);
    $x['page'] = $this->pagination->create_links();
    $x['title'] = 'Berita';
    $x['berita'] = $this->m_berita->berita_perpage($offset, $limit); 
    
    
    $this->load->view('templates/home_header', $x);
    $this->load->view('templates/home_topbar1', $x);
    $this->load->view('berita', $x);
    $this->load->view('templates/home_footer', $x);

    // $x['judul'] = 'Berita';
    // $x['berita'] = $this->m_berita->get_all_berita();
    // if($this->input->post('keyword')){
    //   $x['berita'] = $this->m_berita->cari_berita();
    // }
    // $this->load->view('template/home_header', $x);
    // $this->load->view('berita', $x);
    // $this->load->view('template/home_footer');
  }


  function view()
  {
    $kode = $this->uri->segment(3);
    $x['data'] = $this->m_berita->get_berita_by_kode($kode);
    $this->load->view('v_post_view', $x);
  }

  function search()
  {
    $keyword = $this->input->post('keyword');
    
    $jum = $this->m_berita->get_all_berita();
    $page = $this->uri->segment(3);
    if (!$page) :
      $offset = 0;
    else :
      $offset = $page;
    endif;
    $limit = 5;
    $config['base_url'] = base_url() . 'berita/index/';
    $config['total_rows'] = $jum->num_rows();
    $config['per_page'] = $limit;
    $config['uri_segment'] = 3;
    //Tambahan untuk styling
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';
    $config['first_link'] = 'Awal';
    $config['last_link'] = 'Akhir';
    $config['next_link'] = 'Next >>';
    $config['prev_link'] = '<< Prev';
    $this->pagination->initialize($config);
    $x['page'] = $this->pagination->create_links();
    $x['title'] = 'Berita';
    $x['berita'] = $this->m_berita->berita_perpage($offset, $limit);
    
    $x['berita'] = $this->m_berita->get_keyword($keyword);
    $x['title'] = 'Berita';
    $this->load->view('templates/home_header', $x);
    $this->load->view('templates/home_topbar1');
    $this->load->view('berita', $x);
    $this->load->view('templates/home_footer');
   
  }
  
  function cari(){
		
        $keyword = strip_tags(str_replace("'", "", $this->input->post('keyword')));
		$jum = $this->m_berita->cari($keyword);
		if($jum->num_rows()>0){
			$page=$this->uri->segment(3);
	        if(!$page):
	            $offset = 0;
	        else:
	            $offset = $page;
	        endif;
	        $limit=5;
	        $config['base_url'] = base_url() . 'berita/cari/';
	        $config['total_rows'] = $jum->num_rows();
	        $config['per_page'] = $limit;
	        $config['uri_segment'] = 3;
	        $config['first_link'] = 'Awal';
	        $config['last_link'] = 'Akhir';
	        $config['next_link'] = 'Next >>';
	        $config['prev_link'] = '<< Prev';
	        $this->pagination->initialize($config);
            $x['page'] = $this->pagination->create_links();
            $x['title'] = 'Berita';
            $x['berita'] = $this->m_berita->berita_perpage($offset, $limit);
            
            $x['berita'] = $this->m_berita->get_keyword($keyword);
            $x['title'] = 'Berita';
            $this->load->view('templates/home_header', $x);
            $this->load->view('templates/home_topbar1');
            $this->load->view('berita', $x);
            $this->load->view('templates/home_footer');
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
			redirect('berita');
		}
		
	}


}


