<?php
class M_identitas extends CI_Model{

	function get_all_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_identitas");
		return $hsl;	
	}

	function simpan_identiitas($nama,$email,$alamat,$map,$youtube,$telp,$fb,$twit,$ig,$apk,$gambar){
		
		$hsl=$this->db->query("UPDATE tbl_identitas set identitas_nama='$nama',identitas_email='$email',identitas_alamat='$alamat',identitas_map='$map',identitas_yt='$youtube',identitas_nohp='$telp',identitas_facebook='$fb',identitas_twitter='$twit',identitas_ig='$ig',link_aplikasi='$apk',identitas_logo='$gambar'");
		return $hsl;
	}
	function simpan_identiitas_tanpa_img($nama,$email,$alamat,$map,$youtube,$telp,$fb,$twit,$ig,$apk){

	
		
		$hsl=$this->db->query("UPDATE tbl_identitas set identitas_nama='$nama',identitas_email='$email',identitas_alamat='$alamat',identitas_map='$map',identitas_yt='$youtube',identitas_nohp='$telp',identitas_facebook='$fb',identitas_twitter='$twit',identitas_ig='$ig',link_aplikasi='$apk'");
		return $hsl;
	}


	function get_pengguna_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_identitas where identitas_id='$kode'");
		return $hsl;
	}

	//tentang kami
	function simpan_tentang($tentang,$image,$judul){
		$hsl=$this->db->query("UPDATE tbl_identitas set identitas_tentang='$tentang',image_tentang='$image',identitas_moto='$judul'");
		return $hsl;
	}

}