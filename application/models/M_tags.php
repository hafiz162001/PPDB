<?php
class M_tags extends CI_Model{

	function get_all_tags(){
		$hsl=$this->db->query("select * from tbl_tags");
		return $hsl;
	}
	function simpan_tags($tags){
		$hsl=$this->db->query("insert into tbl_tags(tags_nama) values('$tags')");
		return $hsl;
	}
	function update_tags($kode,$tags){
		$hsl=$this->db->query("update tbl_tags set tags_nama='$tags' where tags_id='$kode'");
		return $hsl;
	}
	function hapus_tags($kode){
		$hsl=$this->db->query("delete from tbl_tags where tags_id='$kode'");
		return $hsl;
	}
	
	function get_tags_byid($tags_id){
		$hsl=$this->db->query("select * from tbl_tags where tags_id='$tags_id'");
		return $hsl;
	}

}