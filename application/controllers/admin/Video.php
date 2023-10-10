<?php
class Video extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_video');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_video->get_all_video();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_video',$x);
	}

	function simpan_video(){
		$video=strip_tags($this->input->post('xvideo'));
		$this->m_video->simpan_video($video);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/video');
	}

	function update_video(){
		$kode=strip_tags($this->input->post('kode'));
		$video=strip_tags($this->input->post('xvideo'));
		$this->m_video->update_video($kode,$video);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/video');
	}
	function hapus_video(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_video->hapus_video($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/video');
	}

}
