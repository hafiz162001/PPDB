<?php
class Pengumuman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengumuman');
		$this->load->model('m_pengunjung');
		$this->load->model('m_pengguna');
		$this->load->model('m_identitas');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_pengumuman->pengumuman();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=2;
        $config['base_url'] = base_url() . 'pengumuman/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	        $config['full_tag_open']    = '<div class="pengumuman-pagination" align="center"><ul class="pagination">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	        $config['prev_tagl_close']  = '</span>Next</li>';
	        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	        $config['first_tagl_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li class="page-item active"><span class="page-link">';
	        $config['last_tagl_close']  = '</span></li>';
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = '&gt;';
            $config['prev_link'] = '&lt;';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_pengumuman->pengumuman_perpage($offset,$limit);
			$x['contact']=$this->m_identitas->get_all_pengguna();
			$x['populer']=$this->db->query("SELECT * FROM tbl_pengumuman ORDER BY pengumuman_view DESC LIMIT 5");
			$x['limit']=$this->m_pengumuman->limit_pengumuman();
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday'] = $this->m_pengunjung->get_average_perday();
			$this->load->view('depan/pengumuman',$x);
	}
	
	function detail($slugs){
		$slug=htmlspecialchars($slugs,ENT_QUOTES);
		$query = $this->db->get_where('tbl_pengumuman', array('pengumuman_slug' => $slug));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['pengumuman_id'];
			// $this->db->query("UPDATE tbl_pengumuman SET tulisan_views=tulisan_views+1 WHERE tulisan_id='$kode'");
			$data=$this->m_pengumuman->get_pengumuman_by_kode($kode);
			$row=$data->row_array();
			$x['id']=$row['pengumuman_id'];
			$x['title']=$row['pengumuman_judul'];
			$x['image']=$row['pengumuman_gambar'];
			$x['pengumuman'] =$row['pengumuman_deskripsi'];
			$x['tanggal']=$row['pengumuman_tanggal'];
			$x['author']=$row['pengumuman_author'];
			$x['category']=$this->db->get('tbl_kategori');
			$x['link_driv']=$row['link_download'];
			$x['slug']=$row['pengumuman_slug'];
			$x['populer']=$this->db->query("SELECT * FROM tbl_pengumuman ORDER BY pengumuman_view DESC LIMIT 5");
			// $x['download']=$row['link_driv'];
			// $x['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			$x['limit']=$this->m_pengumuman->limit_pengumuman();
			$x['contact']=$this->m_identitas->get_all_pengguna();
			$x['date'] = date_default_timezone_set('Asia/Jakarta');
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday'] =$this->m_pengunjung->get_average_perday();
			$this->load->view('depan/pengumuman__detail',$x);
		}else{
			redirect('pengumuman');
		}
	}
		
	// function Tags(){
	// 	 $kategori=str_replace("-"," ",$this->uri->segment(3));
	// 	 $query = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
	// 	 if($query->num_rows() > 0){
	// 		 $x['data']=$query;
	// 		 $x['category']=$this->db->get('tbl_kategori');
 	// 		 $x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
 	// 		 $x['limit']=$this->m_tulisan->limit_berita();
 	// 		 $x['contact']=$this->m_identitas->get_all_pengguna();
	// 		 $this->load->view('depan/blog',$x);
	// 	 }else{
	// 		 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak Ada artikel untuk kategori <b>'.$kategori.'</b></div>');
	// 		 redirect('artikel');
	// 	 }
	// }

    function search(){
        $keyword=str_replace("'", "", htmlspecialchars($this->input->get('keyword',TRUE),ENT_QUOTES));
        $query=$this->m_pengumuman_n->cari_pengumuman_($keyword);
				if($query->num_rows() > 0){
					$x['data']=$query;
					// $x['category']=$this->db->get('tbl_kategori');
  				$x['populer']=$this->db->query("SELECT * FROM tbl_pengumuman ORDER BY pengumuman_view DESC LIMIT 5");
  				$x['limit']=$this->m_pengumuman_->limit_pengumuman_();
  				$x['contact']=$this->m_identitas->get_all_pengguna();
          		$this->load->view('depan/pengumuman_',$x);
	 		 }else{
				 echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>'.$keyword.'</b></div>');
				 redirect('artikel');
			 }
    }

 //    function search(){
	// 	$keyword=str_replace("'", "", $this->input->post('xfilter',TRUE));
	// 	$x['data']=$this->m_tulisan->search_tulisan($keyword);
	// 	$this->load->view('v_blog',$x);
	// }

		// function komentar(){
		// 		$kode = htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
		// 		$data=$this->m_tulisan->get_berita_by_kode($kode);
		// 		$row=$data->row_array();
		// 		$slug=$row['tulisan_slug'];
		// 		$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		// 		$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		// 		$komentar = htmlspecialchars($this->input->post('komentar',TRUE),ENT_QUOTES);
		// 		if(empty($nama) || empty($email)){
		// 			$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
		// 			redirect('artikel/'.$slug);
		// 		}else{
		// 			$data = array(
		// 	        'komentar_nama' 			=> $nama,
		// 	        'komentar_email' 			=> $email,
		// 	        'komentar_isi' 				=> $komentar,
		// 					'komentar_status' 		=> 0,
		// 					'komentar_tulisan_id' => $kode
		// 			);

		// 			$this->db->insert('tbl_komentar', $data);
		// 			echo $this->session->set_flashdata('msg','success');
		// 			redirect('artikel/'.$slug);
		// 		}
		// }

}
