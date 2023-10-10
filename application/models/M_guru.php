<?php
class M_guru extends CI_Model{

function get_all_guru(){
		$hsl=$this->db->query("SELECT tbl_guru.*,DATE_FORMAT(guru_tanggal,'%d/%m/%Y') AS tanggal,nama_guru_kategori FROM tbl_guru join tbl_guru_kategori on guru_kategori_id=id_guru_kategori ORDER BY id_guru DESC");
		return $hsl;
	}
	
	function simpan_guru($nama_guru,$keterangan,$photo,$kategori,$user_id,$user_nama){
		$this->db->trans_start();
            $this->db->query("insert into tbl_guru(nama_guru,keterangan,photo,guru_kategori_id,guru_pengguna_id,guru_author) values ('$nama_guru','$keterangan','$photo','$kategori','$user_id','$user_nama')");
            $this->db->query("update tbl_guru_kategori set count_guru_kategori=count_guru_kategori+1 where id_guru_kategori='$kategori'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	
	function update_guru($guru_id,$nama_guru,$keterangan,$photo,$kategori,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_guru set nama_guru='$nama_guru',keterangan='$keterangan',guru_kategori_id='$kategori',guru_pengguna_id='$user_id',guru_author='$user_nama',photo='$photo' where id_guru='$guru_id'");
		return $hsl;
	}
	function update_guru_tanpa_img($guru_id,$nama_guru,$keterangan,$kategori,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_guru set nama_guru='$nama_guru',keterangan='$keterangan',guru_kategori_id='$kategori',guru_pengguna_id='$user_id',guru_author='$user_nama' where id_guru='$guru_id'");
		return $hsl;
	}
	function hapus_guru($kode,$kategori){
		$this->db->trans_start();
            $this->db->query("delete from tbl_guru where id_guru='$kode'");
            $this->db->query("update tbl_guru_kategori set count_guru_kategori=count_guru_kategori-1 where id_guru_kategori='$kategori'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_guru_home(){
		$hsl=$this->db->query("SELECT tbl_guru.*,DATE_FORMAT(guru_tanggal,'%d/%m/%Y') AS tanggal,nama_guru_kategori FROM tbl_guru join tbl_guru_kategori on guru_kategori_id=id_guru_kategori ORDER BY id_guru DESC limit 4");
		return $hsl;
	}

	function get_guru_by_kategori_id($kode){
		$hsl=$this->db->query("SELECT tbl_guru.*,DATE_FORMAT(guru_tanggal,'%d/%m/%Y') AS tanggal,nama_guru_kategori FROM tbl_guru join tbl_guru_kategori on guru_kategori_id=id_guru_kategori where guru_kategori_id='$kode' ORDER BY id_guru DESC limit 10");
		return $hsl;
	}
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}
	function limit_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru ORDER BY id_guru DESC limit 10");
		return $hsl;
	}

}