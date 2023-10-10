<?php
    $this->load->view('depan/v_header');
?>
  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Portofolio Kami</h1>
              </div>
              <!-- <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Silahkan Hubungi Kami</h2>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
<!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <?php
                    foreach ($alb->result() as $row) : ?>
                <li>
                  <a href="#" data-filter=".<?php echo $row->album_id;?>"><?php echo $row->album_nama;?></a>
                </li>
              <?php endforeach;?>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <?php foreach ($gal->result() as $row) : ?>
          <div class="col-md-4 col-sm-4 col-xs-12 design <?php echo $row->galeri_album_id;?>">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url().'assets/images/galery/'.$row->galeri_gambar;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url().'assets/images/galery/'.$row->galeri_gambar;?>">
                      <h4><?php echo $row->galeri_judul;?></h4>
                      <span><?php echo $row->album_nama;?></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->

  <div class="clearfix"></div>
<?php
    $this->load->view('depan/footer');
?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
</body>

</html>
