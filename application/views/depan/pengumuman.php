<?php
    $this->load->view('depan/v_header');
?>
  <!-- Start Bottom Header -->
  <!-- <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">My Blog</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Profesional Blog Page</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- END Header -->
  <br>
  <br>
  <br>
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="<?php echo site_url('pengumuman/search');?>" method="get">
                <div class="search-option">
                  <input type="search" name="keyword" placeholder="Search...">
                  <button class="button" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                <?php foreach ($populer->result() as $row) :?>
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                           <img src="<?php echo base_url().'assets/images/'.$row->pengumuman_gambar;?>" alt="">
                        </a>
                    </div>
                    <div class="pst-content">
                      <p><strong><a  style="color:white;" href="<?php echo site_url('pengumuman/'.$row->pengumuman_slug);?>"><?php echo limit_words($row->pengumuman_judul,3).'...';?></a></strong></p>
                      <p style="color: white;"><?php echo limit_words($row->pengumuman_deskripsi,5).'...';?></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <?php endforeach;?>
                </div>
              </div>
              <!-- recent end -->
            </div>

          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
          <?php echo $this->session->flashdata('msg');
          ?>
          
              <?php foreach ($data->result() as $row) : ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="<?php echo site_url('pengumuman/'.$row->pengumuman_slug);?>">
					<img src="<?php echo base_url().'assets/images/'.$row->pengumuman_gambar;?>" alt="">
				  </a>
                </div>
                <div class="blog-meta">
                    <span class="comments-type">
						<i class="fa fa-user"></i>
						<a href="#"><?php echo $row->pengumuman_author;?></a>
					</span>
                    <span class="date-type">
					    <i class="fa fa-calendar"></i><?php echo $row->pengumuman_tanggal;?>
					</span>
                </div>
                <div class="blog-text">
                  <h4>
					<a href="<?php echo site_url('artikel/'.$row->pengumuman_slug);?>"><?php echo $row->pengumuman_judul;?></a>
				  </h4>
                  <p>
                   <?php echo limit_words($row->pengumuman_deskripsi,30).'.....';?>
                  </p>
                </div>
                <span>
					<a href="<?php echo site_url('pengumuman/'.$row->pengumuman_slug);?>" class="ready-btn">Read more</a>
				</span>
              </div>
            </div>
            <?php endforeach;?>
            <!-- End single blog -->
            <?php error_reporting(0); echo $page;?>
            <!-- <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>


  <div id="myDiv"></div>
  <?php
    $this->load->view('depan/footer');
?>
  <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/bpn/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>assets/bpn/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>assets/bpn/contactform/contactform.js"></script>

  <script src="<?php echo base_url();?>assets/bpn/js/main.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/floating-wpp.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/floating-wpp.min.css">
</body>
<script type="text/javascript">
  $(function () {
    $('#myDiv').floatingWhatsApp({
      phone: '6289623425224',
      showPopup: 'True',
      popupMessage: "Mau bertanya apa?",
      headerTitle: "Whatsapp Chat",
      position: "right"
    });
  });
</script>
</html>
