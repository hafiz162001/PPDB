<?php
class M_sejarah extends CI_Model{

	function get_all_sejarah(){
		$hsl=$this->db->query("SELECT * FROM tbl_sejarah ORDER BY id_sejarah DESC");
		return $hsl;	
	}

	function simpan_sejarah($judul,$deskripsi,$status,$href){
		$hsl=$this->db->query("INSERT INTO tbl_sejarah (pertanyaan_sejarah,jawaban_sejarah,status,href) VALUES ('$judul','$deskripsi','$status','$href')");
		return $hsl;
	}

	function update_sejarah($judul,$deskripsi,$status,$href){
		$hsl=$this->db->query("update tbl_sejarah set pertanyaan_sejarah='$judul',jawaban_sejarah='$deskripsi',status='$status' where id_sejarah='$kode'");
		return $hsl;
	}
	function update_sejarah_tanpa_img($kode,$judul,$deskripsi,$status){
		$hsl=$this->db->query("update tbl_sejarah set pertanyaan_sejarah='$judul',jawaban_sejarah='$deskripsi',status='$status' where id_sejarah='$kode'");
		return $hsl;
	}
	function hapus_sejarah($kode){
		$hsl=$this->db->query("delete from tbl_sejarah where id_sejarah='$kode'");
		return $hsl;
	}
	
	function get_sejarah_byid($id_sejarah){
		$hsl=$this->db->query("select * from tbl_sejarah where id_sejarah='$id_sejarah'");
		return $hsl;
	}
	
	

}