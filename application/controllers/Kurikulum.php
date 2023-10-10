<?php
class Kurikulum extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
	}
	function index(){
		$x['limit']=$this->m_tulisan->limit_berita();
		$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
		$x['thisday']=$this->m_pengunjung->get_day();
		$this->load->view('depan/kurikulum',$x);
	}

}
