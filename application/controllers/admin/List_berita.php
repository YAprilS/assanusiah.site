<?php
class List_berita extends CI_Controller{
	function __construct(){
		parent::__construct();
		is_logged_in_user();
    	$this->load->model('m_berita');
        $this->load->library('upload');
	}
	function index(){
		$data['title'] = 'List Berita';
		$data['topbar'] = 'List Berita';
        $data['berita'] = $this->m_berita->get_all_berita();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/a_header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/list_berita', $data);
		$this->load->view('templates/a_footer');
	}

	public function deleteberita()
	{
		$id = $this->input->post('id');
		$kirim = $this->m_berita->deleteberita($id);
		if ($kirim == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
		}
		redirect('admin/list_berita');
	}
	
// 	 $config['upload_path'] = './assets/berita/images/'; 
//         	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
//         	    $config['encrypt_name'] = TRUE; 
// 	public function editberita(){
       
//         $data['title'] = 'List Berita';
// 		$data['topbar'] = ' List Berita';
//         $data['berita'] = $this->m_berita->get_all_berita();
// 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
//         $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
//         $this->form_validation->set_rules('berita', 'Berita', 'trim|required');
       
//       if ($this->form_validation->run() == false) {
//         $this->load->view('templates/a_header', $data);
// 		$this->load->view('templates/sidebar');
// 		$this->load->view('templates/topbar', $data);
// 		$this->load->view('admin/list_berita', $data);
// 		$this->load->view('templates/a_footer');
//         } else {
//             $id = $this->input->post('id');
//             $judul = $this->input->post('judul');
//             $isi = $this->input->post('berita');
            
//             // cek jika ada gambar yang akan diupload
//           $upload_image = $_FILES['filefoto']['name'];

//             if ($upload_image) {
//                 $config['max_size']      = '2048';
//                 $config['upload_path'] = './assets/berita/images/';
//                 $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
//          	    $config['encrypt_name'] = TRUE;

//                 $this->load->library('upload', $config);

//                 if ($this->upload->do_upload('filefoto')) {
//                     $old_image = $data['berita']['berita_image'];
//                     if ($old_image != 'default.jpg') {
//                         unlink(FCPATH . 'assets/berita/images/' . $old_image);
//                     }
//                     $new_image = $this->upload->data('file_name');
//                     $this->db->set('berita_image', $new_image);
//                 } else {
//                     echo $this->upload->display_errors();
//                 }
//             }
            
//             $this->db->set('berita_judul', $judul);
//             $this->db->set('berita_isi', $isi);
//             $this->db->where('berita_id', $id);
//             $this->db->update('berita');
          
//             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita berhasil diedit!</div>');
//             redirect('admin/list_berita');
//         }

// 	}


    public function editberita(){
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
                $id=$this->input->post('id');
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');

				$this->m_berita->update_berita($id, $jdl,$berita,$gambar);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita Berhasil Diupdate</div>');
				redirect('admin/list_berita');
		}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berita Gagal Diupdate</div>');
			redirect('admin/list_berita');
			}
		}	
				
	}

 


}
