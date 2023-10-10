<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_guru');
		$this->load->model('m_guru_kategori');
		$this->load->model('m_pengunjung');
		$this->load->model('m_tulisan');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$jum=$this->m_guru->guru();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=8;
        $config['base_url'] = base_url() . 'guru/index/';
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
			$x['data']=$this->m_guru->guru_perpage($offset,$limit);
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday'] =$this->m_pengunjung->get_average_perday();
			$x['guru']=$this->m_guru->get_all_guru();
			$x['guru_kategori']=$this->m_guru_kategori->get_all_guru_kategori();
			$x['limit']=$this->m_tulisan->limit_berita();

			$this->load->view('depan/guru',$x);
	}

}
