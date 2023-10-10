<?php 
class M_client extends CI_Model{

	function get_all_client(){
		$hsl=$this->db->query("SELECT * FROM tbl_client");
		return $hsl;
	}

	function simpan_client($nama,$deskripsi,$gambar,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_client (client_nama,deskripsi_client,client_gambar,jabatan) VALUES ('$nama','$deskripsi','$gambar','$jabatan')");
		return $hsl;
    }
	function simpan_client_tanpa_img($nama,$deskripsi,$gambar,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_client (client_nama,deskripsi_client,client_gambar,jabatan) VALUES ('$nama','$deskripsi','$gambar','$jabatan')");
		return $hsl;
	}

	function update_client($kode,$nama,$deskripsi,$gambar,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_client SET client_nama='$nama',deskripsi_client='$deskripsi',client_gambar='$gambar',jabatan='$jabatan' WHERE client_id='$kode'");
		return $hsl;
	}
	function update_client_tanpa_img($kode,$nama,$deskripsi,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_client SET client_nama='$nama',deskripsi_client='$deskripsi',jabatan='$jabatan' WHERE client_id='$kode'");
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