<?php
class M_baner extends CI_Model{

	function get_all_baner(){
		$hsl=$this->db->query("SELECT tbl_baner.*,DATE_FORMAT(baner_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_baner ORDER BY baner_id ASC");
		return $hsl;
	}

	function get_all_smp(){
		$smp =  $this->uri->segment(1);
		$hsl=$this->db->query("SELECT tbl_baner.*,DATE_FORMAT(baner_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_baner WHERE status = '$smp' ORDER BY baner_id ASC");
		return $hsl;
	}
	function get_all_sma(){
		$sma =  $this->uri->segment(1);
		$hsl=$this->db->query("SELECT tbl_baner.*,DATE_FORMAT(baner_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_baner WHERE status = '$sma' ORDER BY baner_id ASC");
		return $hsl;
	}
	function simpan_baner($judul,$ket,$author,$tampil,$gambar){
		$hsl=$this->db->query("insert into tbl_baner(judul,ket,author,slider,gambar) values ('$judul','$ket','$author','$tampil','$gambar')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function update_baner($kode,$judul,$ket,$author,$tampil,$gambar){
		$hsl=$this->db->query("update tbl_baner set judul='$judul',ket='$ket',author='$author',slider='$tampil',gambar='$gambar' where baner_id='$kode'");
		return $hsl;
	}
	function update_tanpa_img($id,$judul,$ket,$author,$tampil){
		$hsl=$this->db->query("update tbl_baner set judul='$judul',ket='$ket',author='$author',slider='$tampil' where baner_id='$id'");
		return $hsl;
	}
	function hapus_baner($kode){
		$hsl=$this->db->query("delete from tbl_baner where baner_id='$kode'");
		return $hsl;
	}
	

}