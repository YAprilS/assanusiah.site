<?php
class Post_berita extends CI_Controller{
	function __construct(){
		parent::__construct();
		is_logged_in_user();
		$this->load->model('m_berita');
        $this->load->library('upload');
	}
	function index(){
		$data['title'] = 'Tambah Berita';
		$data['topbar'] = 'Tambah Berita';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/a_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/v_post_news', $data);
		$this->load->view('templates/a_footer');
	}

	function simpan_post(){
		$config['upload_path'] = './assets/berita/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/berita/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/berita/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');

				$this->m_berita->simpan_berita($jdl,$berita,$gambar);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita Berhasil Ditambahkan</div>');
				redirect('admin/list_berita');
		}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berita Gagal Ditambahkan</div>');
			redirect('admin/post_berita');
			}
		}	
				
	}

	

}