<?php
class Sma extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_album');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_baner');
		$this->load->model('m_files');
		$this->load->model('m_kontak');
		$this->load->model('m_pengunjung');
		$this->load->model('m_pengguna');
		$this->load->model('m_identitas');
		$this->load->model('m_testimoni');
		$this->load->model('m_guru');
		$this->m_pengunjung->count_visitor();

	}
	function index(){
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['guru']=$this->m_guru->get_all_guru_sma();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['contact']=$this->m_identitas->get_all_pengguna();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$x['faq_l']=$this->db->query("SELECT * FROM tbl_faq WHERE status='1' ORDER BY status");
			$x['faq_r']=$this->db->query("SELECT * FROM tbl_faq WHERE status='2' ORDER BY status");
			$x['baner'] = $this->m_baner->get_all_sma();
			$x['limit']=$this->m_tulisan->limit_berita();
			$x['testi']=$this->m_testimoni->get_all_testimoni();
			$x['data']=$this->m_identitas->get_all_pengguna();
			$x['gal']=$this->m_galeri->get_all_galeri();
			$x['alb']=$this->m_album->get_all_album();
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday']=$this->m_pengunjung->get_day();
		

			$this->load->view('depan/index',$x);
	}

	function kirim_pesan(){
      $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
      $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
      $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
      $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
      $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
      echo $this->session->set_flashdata('msg','success');
      redirect('home');
  }

}
