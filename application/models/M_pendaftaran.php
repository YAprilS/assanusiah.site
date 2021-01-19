<?php
class M_pendaftaran extends CI_Model
{
  public function getallpendaftaran(){
    $this->db->get('pendaftaran');
  }

  public function TambahData($foto)
  {
    
    $data = [
      "nisn" => $this->input->post('nisn', true),
      "nama_lengkap" => $this->input->post('nama_lengkap', true),
      "email" => $this->input->post('email', true),
      "tempat_lahir" => $this->input->post('tempat_lahir', true),
      "tgl_lahir" => $this->input->post('tgl_lahir', true),
      "jk" => $this->input->post('jk', true),
      "riwayat_sakit" => $this->input->post('riwayat_sakit', true),
      "pendidikan_terakhir" => $this->input->post('pendidikan_terakhir', true),
      "nama_ayah" => $this->input->post('nama_ayah', true),
      "pendidikan_ayah" => $this->input->post('pendidikan_ayah', true),
      "pekerjaan_ayah" => $this->input->post('pekerjaan_ayah', true),
      "nama_ibu" => $this->input->post('nama_ibu', true),
      "pendidikan_ibu" => $this->input->post('pendidikan_ibu', true),
      "pekerjaan_ibu" => $this->input->post('pekerjaan_ibu', true),
      "alamat_ortu" => $this->input->post('alamat_ortu', true),
      "foto" => $foto,

    ];
    $this->db->insert('pendaftaran', $data);
  }

  function simpan_file($file, $deskripsi)
  {
    $hsl = $this->db->query("INSERT INTO pengumuman(filenama, desk) VALUES ('$file', '$deskripsi')");
    return $hsl;
  }

  function getdata()
  {
    $hsl = $this->db->query("SELECT * FROM pendaftaran ORDER BY id DESC limit 1");
    return $hsl;
  }

 

}