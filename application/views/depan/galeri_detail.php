 <?php
    $this->load->view('depan/v_header');
?>



 <!-- Start portfolio Area -->
  <div id="galery" class="portfolio-area area-padding fix">
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2" style="color: white;">
                  <!-- <h1 class="title2">Kurikulum</h1> -->
                </div>
                <div class="layer3">
                  <!-- <h2 style="color: white;">Ishlahulummah Tasikmalaya</h2> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6" style="margin-left: 300px;">
        <div class="box-header">
            <h1>Galeri Ishlahulummah Boarding School</h1>
        </div>
    </div>
  <br>
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="section-headline text-center">
            <br>
            <br>
            <h2>Gallery dan kegiatan </h2>
          </div>
        </div> -->
      </div>
      <div class="row">
        <!-- Start galeri -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow slideInRight" data-wow-duration="2s" data-wow-delay=".2s">
            <!-- <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
              
                <li>
                  <a href="#" data-filter="">t</a>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
        <div class="awesome-project-content wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s" style="margin-top: 50px;">
        <?php foreach ($detail->result() as $row) : ?>
          <div class="col-md-4 col-sm-4 col-xs-12 design <?php echo $row->galeri_album_id;?>">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo base_url().'assets/images/galery/'.$row->galeri_gambar;?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo base_url().'assets/images/galery/'.$row->galeri_gambar;?>">
                      <h4><?php echo $row->galeri_judul;?></h4>
                      <span></span>
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
  <!-- galeri end -->

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

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>assets/bpn/contactform/contactform.js"></script>

  <script src="<?php echo base_url();?>assets/bpn/js/main.js"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/floating-wpp.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="<?php echo base_url().'assets/rvslider.latest/js/rvslider.min.js'?>"></script>