<?php
    $this->load->view('depan/v_header');
?>
<?php
$title=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
?>

    <!-- ======= Team Section ======= -->
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
            <h1>Album Ishlahulummah Boarding School</h1>
        </div>
    </div>
  <br>
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- <div class="section-headline text-center">
              <h2>Guru Galeri</h2>
            </div> -->
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