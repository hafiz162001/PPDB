<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
		$this->load->model('m_identitas');
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
			$this->load->view('admin/v_dashboard',$x);
		}elseif($this->session->userdata('akses')=='2'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
			$this->load->view('admin/v_dashboard',$x);
		}else{
			redirect('administrator');
		}
	
	}

	function profil(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_identitas->get_pengguna_login($kode);
		$x['data']=$this->m_identitas->get_all_pengguna();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_profil',$x);
	}
	
}