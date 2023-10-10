<?php
    $this->load->view('depan/v_header');
?>

<!-- ======= Sejarah Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <h1 style="color: white;"></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6" style="margin-left: 300px;">
        <div class="box-header">
            <h1>Sejarah Ishlahulummah Boarding School</h1>
        </div>
    </div>
    <!-- End Sejarah Header -->

     <!-- Faq area start -->
     <!-- Faq area start -->
  <div id="ekskul" class="faq-area area-padding">
    <div class="container">
      <div class="row wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- <div class="section-headline text-center">
            <br>
            <h2>Ekstrakulikuler</h2>
          </div> -->
        </div>
      </div>
      <div class="row">
      
        <div class="col-md-6 col-sm-6 col-xs-12 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="pilihan">
          <h3> <img src=""  style="width:25px;"></h3>  
          </div>
         <div class="faq-details" >
            <div class="panel-group" id="accordion" >
              <!-- Panel Default -->
              <div class="panel panel-default">
              <?php foreach ($sejarah_l->result_array() as $i) :?>
                <div class="panel-heading" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
                  <h4 class="check-title">
                    <a data-toggle="collapse" class="<?php echo $i['active'];?>" data-parent="#accordion" href="#<?php echo $i['href'];?>">
                      <span class="acc-icons"></span><?php echo $i['pertanyaan_sejarah'];?>
                    </a>
                    </h4>
                </div>
                <div id="<?php echo $i['href'];?>" class="panel-collapse collapse <?php echo $i['active'];?>">
                  <div class="panel-body">
                    <p style="color: #000;">
                      <?php echo $i['jawaban_sejarah'];?>
                    </p>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
                    <!-- <ul class="nav nav-tabs" role="tablist" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">> -->

        <div class="col-md-6 col-sm-6 col-xs-12 wow slideInRight" data-wow-duration="2s" data-wow-delay=".2s">
        <h3> <img src="" style="width:30px;"></h3>
        <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
            <?php foreach ($visi_r->result_array() as $r) :?>
              <li class="<?php echo $r['active'];?>">
                <a style="color:white;" href="#w<?php echo $r['href'];?>" role="tab" data-toggle="tab"><?php echo $r['pertanyaan_sejarah'];?></a>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="tab-content">
          <?php foreach ($visi_r->result_array() as $r) :?>
            <div class="tab-pane <?php echo $r['active'];?>" id="w<?php echo $r['href'];?>">
              <div class="tab-inner">
                <div class="event-content head-team">
                <p>
                    <p style="color: #000;">
                  <?php echo $r['jawaban_sejarah'];?>
                  </p>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
        </div>

      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

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