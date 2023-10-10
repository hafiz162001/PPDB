<?php
class M_pendaftar extends CI_Model{

	function get_all_pendaftaran(){
		$hsl=$this->db->query("SELECT * FROM tbl_pendaftaran ORDER BY tanggal_daftar DESC");
		return $hsl;	
	}

	function hapus_peserta($kode){
		$this->db->trans_start();
            $this->db->query("delete from tbl_pendaftaran where id_peserta='$kode'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	function get_pendaftar_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_pendaftaran.*,DATE_FORMAT(tanggal_daftar,'%d/%m/%Y') AS tanggal FROM tbl_pendaftaran where id_peserta='$kode'");
		return $hsl;
	}
	function get_pendaftar_by_wali($wali){
		$hsl=$this->db->query("SELECT * FROM tbl_wali where no_peserta='$wali'");
		
		return $hsl;
	}
}