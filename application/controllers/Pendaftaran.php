<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
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
    $data['title'] = 'Pendaftaran';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/home_topbar1');
    $this->load->view('pendaftaran', $data);
    $this->load->view('templates/home_footer');
  }

  public function tambahdata()
  {
    $this->form_validation->set_rules('nisn', 'Nisn',
      'required|trim|min_length[10]|max_length[10]|is_unique[pendaftaran.nisn]',
      [
        'is_unique' => 'Nisn ini telah terdaftar! Silahkan gunakan nisn lain!',
        'required' => 'Masukkan Nisn!',
        'max_length' => 'nisn 10 Karakter!',
        'min_length' => 'nisn 10 Karakter!'
      ]
    );
    $this->form_validation->set_rules('nama_lengkap', 'Namalengkap',
      'required|trim',
      [
        'required' => 'Masukkan Nama Lengkap!'
      ]);
    $this->form_validation->set_rules('email', 'Email',
      'required|trim|valid_email|is_unique[pendaftaran.email]', 
      [
      'is_unique' => 'Email ini telah terdaftar! Silahkan gunakan Email lain!',
      'required' => 'Masukkan Email!'
    ]);
    $this->form_validation->set_rules('tempat_lahir', 'Tempatlahir',
      'required|trim',
      [
        'required' => 'Masukkan Tempat Lahir!'
      ]);
    $this->form_validation->set_rules('tgl_lahir', 'Tgllahir',
      'required|trim',
      [
        'required' => 'Masukkan Tanggal Lahir!'
      ]);
    $this->form_validation->set_rules('jk', 'Jk',
      'required|trim',
      [
        'required' => 'Masukkan Jenis Kelamin!'
      ]);
    $this->form_validation->set_rules('riwayat_sakit', 'Riwayatsakit', 'trim');
    $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikanterakhir',
      'required|trim',
      [
        'required' => 'Masukkan Pendidikan Terakhir!'
      ]);
    $this->form_validation->set_rules('nama_ayah', 'Namaayah',
      'required|trim',
      [
        'required' => 'Masukkan Nama Ayah!'
      ]);
    $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikanayah',
      'required|trim',
      [
        'required' => 'Masukkan Pendidikan Ayah!'
      ]);
    $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaanayah',
      'required|trim',
      [
        'required' => 'Masukkan Pekerjaan Ayah!'
      ]);
    $this->form_validation->set_rules('nama_ibu', 'Namaibu',
      'required|trim',
      [
        'required' => 'Masukkan Nama Ibu!'
      ]);
    $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikanibu',
      'required|trim',
      [
        'required' => 'Masukkan Pendidikan Ibu!'
      ]);
    $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaanibu',
      'required|trim',
      [
        'required' => 'Masukkan Pekerjaan Ibu!'
      ]);
    $this->form_validation->set_rules(
      'alamat_ortu',
      'Alamatortu',
      'required|trim',
      [
        'required' => 'Masukkan Pekerjaan Ibu!'
      ]
    );

    if ($this->form_validation->run() == FALSE) {
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran Gagal! Silahkan periksa kembali form pendaftaran</div>');
    $data['title'] = 'Pendaftaran';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/home_topbar1');
    $this->load->view('pendaftaran', $data);
    $this->load->view('templates/home_footer');
    } else {
        $config['upload_path'] = './assets/img/foto/'; //path folder
        $config['allowed_types'] = 'pdf|jpeg|jpg|png'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
          if ($this->upload->do_upload('foto')) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img/foto/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '80%';
            $config['width'] = 354;
            $config['height'] = 472;
            $config['new_image'] = './assets/img/foto/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $foto = $gbr['file_name'];

            $this->m_pendaftaran->tambahdata($foto);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda berhasil melakukan pendaftaran! Silahkan <b>download</b> Kartu Peserta di bawah ini.</div>');
            redirect('berhasil');
          } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Extensi File Salah! Data Gagal Ditambahkan</div>');
            redirect('pendaftaran');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran Gagal! Silahkan periksa kembali form pendaftaran</div>');
          redirect('pendaftaran');
        } 
    }
  }

  public function download($id)
  {
    $data['data'] = $this->m_datasantri->getdatabyid($id)->row_array();
    $html = $this->load->view('pdf', $data, true);
    $this->mypdf->pdfgen($html, 'Kartu Peserta', 'A4', 'potrait');
  }

}
