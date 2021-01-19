<?php
class M_berita extends CI_Model{

	function simpan_berita($jdl,$berita,$gambar){
		$hsl=$this->db->query("INSERT INTO berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		return $hsl;
	}

	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM berita WHERE berita_id='$kode'");
		return $hsl;
	}

	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM berita ORDER BY berita_id DESC");
		return $hsl;
	}

	function getallberita()
	{
		return $this->db->get('berita');
	}

	function deleteberita($id)
	{
		$this->db->where('berita_id', $id);
		$this->db->delete('berita');
	}

	function berita_perpage($offset, $limit)
	{
		$hsl = $this->db->query("SELECT * FROM berita ORDER BY berita_id DESC limit $offset,$limit");
		return $hsl;
	}

	function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->like('berita_judul', $keyword);
 		return $this->db->get();
	
	}
	
	public function update_berita($id, $jdl, $berita, $gambar)
	{
    $this->db->set('berita_judul', $jdl);
    $this->db->set('berita_isi', $berita);
    $this->db->set('berita_image', $gambar);
    $this->db->where('berita_id', $id);
    $this->db->update('berita');
  
	}

}