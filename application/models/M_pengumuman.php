<?php
class M_pengumuman extends CI_Model{

	function get_all_pengumuman(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,link_download, DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author, pengumuman_gambar FROM tbl_pengumuman ORDER BY pengumuman_id DESC");
		return $hsl;
	}
	function simpan_pengumuman($judul,$deskripsi,$photo,$slug,$link){
		// $author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_pengumuman(pengumuman_judul,pengumuman_deskripsi,pengumuman_author,pengumuman_gambar,pengumuman_slug,link_download) VALUES ('$judul','$deskripsi','$author','$photo','$slug','$link')");
		return $hsl;
	}
	function update_pengumuman($kode,$judul,$deskripsi,$photo,$link){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_pengumuman SET pengumuman_judul='$judul',pengumuman_deskripsi='$deskripsi',pengumuman_gambar='$photo',pengumuman_slug='$slug',link_download= '$link' where pengumuman_id='$kode'");
		return $hsl;
	}
	function update_pengumuman_tanpa_gambr($kode,$judul,$deskripsi,$slug,$link){
		$author=$this->session->userdata('nama');
 
		$hsl=$this->db->query("UPDATE tbl_pengumuman SET 				   			pengumuman_judul='$judul',pengumuman_deskripsi='$deskripsi',pengumuman_slug='$slug',link_download='$link'  where pengumuman_id='$kode'");
		return $hsl;
	}
	function hapus_pengumuman($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pengumuman WHERE pengumuman_id='$kode'");
		return $hsl;
	}

	//Front-end
	function get_pengumuman_home(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author,pengumuman_gambar FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit 3");
		return $hsl;
	}

	function get_pengumuman_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_pengumuman.*,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pengumuman where pengumuman_id='$kode'");
		return $hsl;
	}

	function pengumuman(){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author,pengumuman_gambar FROM tbl_pengumuman ORDER BY pengumuman_id DESC");
		return $hsl;
	}
	function pengumuman_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,pengumuman_slug,pengumuman_tanggal,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author,pengumuman_gambar FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit $offset,$limit");
		return $hsl;
	}

	function cari_pengumuman($keyword){
		$hsl=$this->db->query("SELECT tbl_pengumuman.*,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_pengumuman WHERE pengumuman_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

	function limit_pengumuman(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengumuman ORDER BY pengumuman_tanggal DESC limit 2");
		return $hsl;
	}

}
