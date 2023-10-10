<?php 
class M_alasan extends CI_Model{

	function get_all_alasan(){
		$hsl=$this->db->query("SELECT * FROM tbl_alasan");
		return $hsl;
	}

	function simpan_alasan($gambar){
		$hsl=$this->db->query("INSERT INTO tbl_alasan (alasan_gambar) VALUES ('$gambar')");
		return $hsl;
	}

	function update_alasan($kode,$gambar){
		// print_r($gambar);
		// exit();
		$hsl=$this->db->query("UPDATE tbl_alasan SET alasan_gambar='$gambar' WHERE alasan_id='$kode'");
		return $hsl;
	}

	function hapus_alasan($kode){
		$hsl=$this->db->query("DELETE FROM tbl_alasan WHERE alasan_id='$kode'");
		return $hsl;
	}

	//front-end
	function alasan(){
		$hsl=$this->db->query("SELECT * FROM tbl_alasan");
		return $hsl;
	}

}