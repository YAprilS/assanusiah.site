<?php
class M_klasifikasi extends CI_Model
{
  
  public function getallklasifikasi()
  {
    // return $this->db->get('klasifikasi');
    $hsl = $this->db->query("SELECT * FROM klasifikasi ORDER BY id DESC");
    return $hsl;
  }

  public function tambahdata()
  {
    $nilai1 = $this->input->post('nilai1', true);
    $nilai2 = $this->input->post('nilai2', true);
    $nilai3 = $this->input->post('nilai3', true);
    $total = ($nilai1 + $nilai2 + $nilai3) / 3;
    if ($total >= 60) {
      $ket = "lulus";
    } else {
      $ket = "Tidak Lulus";
    }
    $data = [
      "nisn" => $this->input->post('kode', true),
      "nama" => $this->input->post('nama', true),
      "email" => $this->input->post('email', true),
      "nilai1" => $nilai1,
      "nilai2" => $nilai2,
      "nilai3" => $nilai3,
      "total" => $total,
      "ket" => $ket,
    ];
    $this->db->insert('klasifikasi', $data);
  
}

  public function delall()
  {
    $this->db->empty_table('klasifikasi');
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('klasifikasi');
  }


  function get_data_bykode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM pendaftaran WHERE nisn='$kode'");
    if ($hsl->num_rows() > 0) {
      foreach ($hsl->result() as $data) {
        $hasil = array(
          'nisn' => $data->nisn,
          'nama_lengkap' => $data->nama_lengkap,
          'email' => $data->email,
        );
      }
    }
    return $hasil;
  }

}