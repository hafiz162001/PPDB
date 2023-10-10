<?php
class M_video extends CI_Model{

	function get_all_video(){
		$hsl=$this->db->query("select * from tbl_video");
		return $hsl;
	}
	function simpan_video($video){
		$hsl=$this->db->query("insert into tbl_video(link_video) values('$video')");
		return $hsl;
	}
	function update_video($kode,$video){
		$hsl=$this->db->query("update tbl_video set link_video='$video' where id_video='$kode'");
		return $hsl;
	}
	function hapus_video($kode){
		$hsl=$this->db->query("delete from tbl_video where id_video='$kode'");
		return $hsl;
	}
	
	// function get_kategori_byid($kategori_id){
	// 	$hsl=$this->db->query("select * from tbl_kategori where kategori_id='$kategori_id'");
	// 	return $hsl;
	// }

}