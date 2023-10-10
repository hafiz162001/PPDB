<?php
class Galeri extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
		$this->load->model('m_tulisan');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_album->album();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=8;
        $config['base_url'] = base_url() . 'galeri/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';

            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_album->album_perpage($offset,$limit);
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday'] =$this->m_pengunjung->get_average_perday();
			$x['alb']=$this->m_album->get_all_album();
			$x['limit']=$this->m_tulisan->limit_berita();

			$this->load->view('depan/galeri',$x);
	}

	function detail($kode){
				// $jum=$this->m_album->album();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $detail=8;
        $config['base_url'] = base_url() . 'galeri/index/';
            // $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $detail;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';

            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
			$query = $this->db->get_where('tbl_album', array('album_id' => $kode));
			// if($query->num_rows() > 0){
				 $x['page'] =$this->pagination->create_links();
			$x['data']=$this->m_galeri->galeri_perpage($offset,$detail);
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday'] =$this->m_pengunjung->get_average_perday();
			$x['alb']=$this->m_galeri->get_all_galeri();
			$x['limit']=$this->m_tulisan->limit_berita();
			$x['detail']=$this->m_galeri->get_galeri_by_album_id($kode);
				$b=$query->row_array();
				$kode=$b['album_id'];
				// $this->db->query("UPDATE tbl_album WHERE album_id='$kode'");
				$data=$this->m_galeri->get_galeri_by_album_id($kode);
				$row=$data->row_array();
				$x['id']=$row['galeri_id'];
				$x['title']=$row['galeri_judul'];
				$x['image']=$row['galeri_gambar'];
				$x['tanggal']=$row['galeri_tanggal'];
				$this->load->view('depan/galeri_detail',$x);
		// 	}else{
		// 	redirect('galeri');
		// }
	}

}
