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
		$kode=htmlspecialchars($kode,ENT_QUOTES);
		$kode = $this->uri->segment(3);
		$query = $this->db->get_where('tbl_album', array('album_id' => $kode));
		if($query->num_rows() > 0){
			$b=$query->row_array();
			$kode=$b['album_id'];
			// $this->db->query("UPDATE tbl_album WHERE album_id='$kode'");
			$data=$this->m_galeri->get_galeri_by_album_id($kode);
			$row=$data->row_array();
			$x['id']=$row['galeri_id'];
			$x['title']=$row['galeri_judul'];
			$x['image']=$row['galeri_gambar'];
			$x['tanggal']=$row['galeri_tanggal'];
			// $x['author']=$row['tulisan_author'];
			// $x['show_komentar']=$this->m_tulisan->show_komentar_by_tulisan_id($kode);
			// $x['category']=$this->db->get('tbl_kategori');
			// $x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");
			$x['limit']=$this->m_galeri->limit_galeri();
			// $x['contact']=$this->m_identitas->get_all_pengguna();
			$x['date'] = date_default_timezone_set('Asia/Jakarta');
			$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
			$x['thisday'] =$this->m_pengunjung->get_average_perday();
			// $x['alb']=$this->m_album->get_all_album();
			$x['gal']=$this->m_galeri->get_all_galeri();
			$this->load->view('depan/galeri_detail',$x);
		}else{
			redirect('galeri');
		}
	}

}



<?php
    $this->load->view('depan/v_header');
?>
<?php
$title=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
?>

    <!-- ======= Team Section ======= -->
    <br>
    <br>
    <br>
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Guru Galeri</h2>
            </div>
          </div>
        </div>
        <div class="row">
                <?php
                    foreach ($alb->result() as $row) : ?>        
                  <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a href="<?php echo site_url('galeri/detail/'.$row->album_id);?>">
                    <img src="<?php echo base_url().'/assets/images/'.$row->album_cover;?>" alt="">
                  </a>
                  <div class="team-social-icon text-center">
                    <!-- <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                      </li>
                    </ul> -->
                  </div>
                </div>
                <div class="team-content text-center">
                   <h5><?php echo $row->album_nama;?></h5>
                  <!-- <p></p> -->
                </div>
              </div>
              <br>
            </div>
            <?php endforeach;?>
        </div>
      </div>
    </div><!-- End Team Section -->

    <?php
        $this->load->view('depan/footer');
    ?>
    
  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/bpn/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>assets/bpn/lib/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/isotope/isotope.pkgd.min.js"></script>

</body>
</html>


 <?php
    $this->load->view('depan/v_header');
?>

  <div id="galery" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="awesome-project-content wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="col-md-4 col-sm-4 col-xs-12 design <?php echo $id;?>">
                    <div class="single-awesome-project">
                    <div class="awesome-img">
                        <a href="#"><img src="<?php echo base_url().'assets/images/galery/'.$image;?>" alt="" /></a>
                        <div class="add-actions text-center">
                        <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="<?php echo base_url().'assets/images/galery/'.$image;?>">
                            <h4><?php echo $title;?></h4>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
  </div>

<?php     
    $this->load->view('depan/footer');
?>



 <?php
    $this->load->view('depan/v_header');
?>

  <div id="galery" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row awesome-project-content portfolio-container">
            <div class="awesome-project-content wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                <?php foreach ($detail->result() as $row) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12 design">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="<?php echo base_url().'assets/images/galery/'.$row->galeri_gambar;?>" alt="" /></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url().'assets/images/galery/'.$row->galeri_gambar;?>">
                                    <h4><?php echo $row->galeri_judul;?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
  </div>

