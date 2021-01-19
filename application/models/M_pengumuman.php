<?php
class M_pengumuman extends CI_Model
{
  public function getallpengumuman()
  {
    // return $this->db->get('pengumuman');
    $hsl = $this->db->query("SELECT * FROM pengumuman ORDER BY id DESC");
    return $hsl;
  }

  function get_all_berita()
  {
    $hsl = $this->db->query("SELECT * FROM berita ORDER BY berita_id DESC");
    return $hsl;
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pengumuman');
  }
  

  function simpan_file($file, $deskripsi)
  {
    $hsl = $this->db->query("INSERT INTO pengumuman(filenama, desk) VALUES ('$file', '$deskripsi')");
    return $hsl;
  }

  function get_file_byid($id)
  {
    $hsl = $this->db->query("SELECT * FROM pengumuman WHERE id='$id'");
    return $hsl;
  }

}