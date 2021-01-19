<?php
class M_monitoring extends CI_Model
{
  public function tambahdata()
  {
    $data = [
      "email" => $this->input->post('kode', true),
      "nama" => $this->input->post('nama', true),
      "pelanggaran" => $this->input->post('pelanggaran', true),
      "prestasi" => $this->input->post('prestasi', true),
      "alquran" => $this->input->post('hafalan', true),
      "spp" => $this->input->post('spp', true),
     
    ];
    $this->db->insert('monitoring', $data);
  }

  function search_nisn($nisn)
  {
    $this->db->like('nisn', $nisn, 'both');
    $this->db->limit(10);
    return $this->db->get('tbl_pengguna')->row_array();
  }

  public function getallmonitoring()
  {
    // return $this->db->get('monitoring');
    $hsl = $this->db->query("SELECT * FROM monitoring ORDER BY id DESC");
    return $hsl;
  }

  public function getall(){
    return $this->db->get_where('monitoring', ['email' => $this->session->userdata('email')])->row_array();
  }

  function get_data_bykode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM user WHERE email='$kode'");
    if ($hsl->num_rows() > 0) {
      foreach ($hsl->result() as $data) {
        $hasil = array(
          'email' => $data->email,
          'name' => $data->name,
        );
      }
    }
    return $hasil;
  }

  public function deletemonitoring($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('monitoring');
  }

}
