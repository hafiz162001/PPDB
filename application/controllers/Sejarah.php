<?php
class Sejarah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_sejarah');
		$this->load->model('m_pengunjung');

	}
	function index(){
		$x['limit']=$this->m_tulisan->limit_berita();
		$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
		$x['thisday']=$this->m_pengunjung->get_day();
		$x['sejarah_l']=$this->db->query("SELECT * FROM tbl_sejarah WHERE status='1' ORDER BY status");
		$x['visi_r']=$this->db->query("SELECT * FROM tbl_sejarah WHERE status='2' ORDER BY status");
		$x['sejarah']=$this->m_sejarah->get_all_sejarah();
		$this->load->view('depan/sejarah',$x);
	}

}
