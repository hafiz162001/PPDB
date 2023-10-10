<?php
class M_guru_kategori extends CI_Model{

	function get_all_guru_kategori(){
		$hsl=$this->db->query("SELECT tbl_guru_kategori.*,DATE_FORMAT(tanggal_guru_kategori,'%d/%m/%Y') AS tanggal FROM tbl_guru_kategori ORDER BY id_guru_kategori DESC");
		return $hsl;
	}
	function simpan_guru_kategori($nama_kategori,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("insert into tbl_guru_kategori(nama_guru_kategori,guru_kategori_pengguna_id,author_guru_kategori,cover_guru_kategori) values ('$nama_kategori','$user_id','$user_nama','$gambar')");
		return $hsl;
	}
	function get_guru_kategori_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_guru_kategori.* where id_guru_kategori='$kode'");
		return $hsl;
	}
	function update_guru_kategori($id_guru_kategori,$nama_kategori,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("update tbl_guru_kategori set nama_guru_kategori='$nama_kategori',guru_kategori_pengguna_id='$user_id',author_guru_kategori='$user_nama',cover_guru_kategori='$gambar' where id_guru_kategori='$id_guru_kategori'");
		return $hsl;
	}
	function update_guru_kategori_tanpa_img($id_guru_kategori,$nama_kategori,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_guru_kategori set nama_guru_kategori='$nama_kategori',guru_kategori_pengguna_id='$user_id',author_guru_kategori='$user_nama' where id_guru_kategori='$id_guru_kategori'");
		return $hsl;
	}
	function hapus_guru_kategori($kode){
		$hsl=$this->db->query("delete from tbl_guru_kategori where id_guru_kategori='$kode'");
		return $hsl;
	}
	function guru_kategori(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru_kategori");
		return $hsl;
	}
	function guru_kategori_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru_kategori limit $offset,$limit");
		return $hsl;
	}

}