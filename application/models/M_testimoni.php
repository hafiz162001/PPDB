<?php 
class M_testimoni extends CI_Model{

	function get_all_testimoni(){
		$hsl=$this->db->query("SELECT * FROM tbl_testimoni");
		return $hsl;
	}

	function simpan_testi($nama,$isi,$email,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_testimoni (testimoni_nama,testimoni_isi,testimoni_email,gambar) VALUES ('$nama','$isi','$email','$gambar')");
		return $hsl;
	}
	function simpan_testi_tanpa_img($nama,$isi,$email){
		$hsl=$this->db->query("INSERT INTO tbl_testimoni (testimoni_nama,testimoni_isi,testimoni_email) VALUES ('$nama','$isi','$email')");
		return $hsl;
	}

	function update_testi($kode,$nama,$isi,$email,$gambar){
		$hsl=$this->db->query("UPDATE tbl_testimoni SET testimoni_nama='$nama',testimoni_isi='$isi',testimoni_email='$email',gambar='$gambar' WHERE testimoni_id='$kode'");
		return $hsl;
	}
	function update_testi_tanpa_img($kode,$nama,$isi,$email){
		$hsl=$this->db->query("UPDATE tbl_testimoni SET testimoni_nama='$nama',testimoni_isi='$isi',testimoni_email='$email' WHERE testimoni_id='$kode'");
		return $hsl;
	}
	function hapus_testi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_testimoni WHERE testimoni_id='$kode'");
		return $hsl;
	}

	//front-end
	function team(){
		$hsl=$this->db->query("SELECT * FROM tbl_testimoni");
		return $hsl;
	}
	function team_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_testimoni limit $offset,$limit");
		return $hsl;
	}

}