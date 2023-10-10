<?php 
class M_program extends CI_Model{

	function get_all_program(){
		$hsl=$this->db->query("SELECT * FROM tbl_program");
		return $hsl;
	}

	function simpan_program($deskripsi){
		$hsl=$this->db->query("INSERT INTO tbl_program (deskrpisi_program) VALUES ('$deskripsi')");
		return $hsl;
	}

	function update_program($deskripsi){
		$hsl=$this->db->query("UPDATE tbl_program SET deskripsi_program='$deskripsi' WHERE id_program='$kode'");
		return $hsl;
	}

	function hapus_client($kode){
		$hsl=$this->db->query("DELETE FROM tbl_client WHERE client_id='$kode'");
		return $hsl;
	}

	//front-end
	function team(){
		$hsl=$this->db->query("SELECT * FROM tbl_client");
		return $hsl;
	}
	function team_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_client limit $offset,$limit");
		return $hsl;
	}

}