<?php
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_identitas');
		$this->load->model('m_team');
		$this->load->model('m_album');
		$this->load->model('m_galeri');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$x['limit']=$this->m_tulisan->limit_berita();
		$x['contact']=$this->m_identitas->get_all_pengguna();
		$x['data']=$this->m_team->get_all_team();
		$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
		$x['thisday']  =$this->m_pengunjung->get_average_perday();
		$this->load->view('depan/about',$x);
	}

	function portofolio(){
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$x['limit']=$this->m_tulisan->limit_berita();
		$x['contact']=$this->m_identitas->get_all_pengguna();
		$x['data']=$this->m_team->get_all_team();
		$x['gal']=$this->m_galeri->get_all_galeri();
		$x['alb']=$this->m_album->get_all_album();
		$this->load->view('depan/potofolio',$x);
	}
}
