<?php
class Contact extends CI_Controller{
  function __construct(){
		parent::__construct();
      $this->load->model('m_kontak');
      $this->load->model('m_tulisan');
      $this->load->model('m_pengunjung');
      $this->load->model('m_identitas');
  		$this->m_pengunjung->count_visitor();
	}
	function index(){
    $x['limit']=$this->m_tulisan->limit_berita();
    $x['contact']=$this->m_identitas->get_all_pengguna();
    $x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
    $x['thisday']  =$this->m_pengunjung->get_average_perday();
		$this->load->view('depan/contact',$x);
	}

  function kirim_pesan(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','success');
      
      redirect('Contact');
  }
}
