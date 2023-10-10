<?php
class Tutorial extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_identitas');
		$this->load->model('m_files');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->helper('download');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['contact']=$this->m_identitas->get_all_pengguna();
		$x['limit']=$this->m_tulisan->limit_berita();
		$x['data']=$this->m_files->get_all_files();
		$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
		$x['thisday'] =$this->m_pengunjung->get_average_perday();
		$this->load->view('depan/download',$x);
	}

	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}

}
