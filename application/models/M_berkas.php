<?php 
class M_berkas extends CI_Model{

	function get_all_berkas(){
		$hsl=$this->db->query("SELECT * FROM tbl_berkas");
		return $hsl;
	}

	function simpan_berkas($nama_berkas,$keterangan_berkas){
		$hsl=$this->db->query("INSERT INTO tbl_berkas (nama_berkas,keterangan_berkas) VALUES ('$nama_berkas','$keterangan_berkas')");
		return $hsl;
	}

	function update_berkas($kode,$nama_berkas,$keterangan_berkas){
		$hsl=$this->db->query("UPDATE tbl_berkas SET nama_berkas='$nama_berkas',keterangan_berkas='$keterangan_berkas'  WHERE id_berkas='$kode'");
		return $hsl;
	}
	function hapus_berkas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_berkas WHERE id_berkas='$kode'");
		return $hsl;
	}

	//front-end
	function berkas(){
		$hsl=$this->db->query("SELECT * FROM tbl_berkas");
		return $hsl;
	}
	function berkas_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_berkas limit $offset,$limit");
		return $hsl;
	}

}