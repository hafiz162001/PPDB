<?php
    $this->load->view('depan/v_header');
?>



<?php
$title=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
?>
  

<!-- <style>
  h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 70px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #1c47e3;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel .carousel-item {
	color: #999;
	overflow: hidden;
	min-height: 120px;
	font-size: 13px;
}
.carousel .media img {
	width: 80px;
	height: 80px;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 0 15px 0 60px ;
	position: relative;
}
.carousel .testimonial::before {
	content: "\201C";
	font-family: Arial,sans-serif;
	color: #e2e2e2;
	font-weight: bold;
	font-size: 68px;
	line-height: 54px;
	position: absolute;
	left: 15px;
	top: 0;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #1c47e3;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 20px;
	height: 20px;
	border-radius: 50%;
	margin: 1px 3px;
	box-sizing: border-box;
}
.carousel-indicators li {	
	background: #e2e2e2;
	border: 4px solid #fff;
}
.carousel-indicators li.active {
	color: #fff;
	background: #1c47e3;    
	border: 5px double;    
}
</style> -->
  <!-- Start Slider Area -->
  <style>
    /* Add some basic styles for the slider container */
    

    /* Add media queries for responsiveness */
    @media screen and (max-width: 768px) {
      /* Adjust styles for screens with a maximum width of 768px */
  
      .slider-area {
      margin: 0 auto;
    }
      .slider-area img {
      max-width: 100%;
      height: auto;
      display: block;
      width: 100%;
     margin-left: 10px;
    }
      .ready-btn page-scroll{
    display: flex;
    justify-content: center;
    }
    .centered-link {
        margin-top: 10px;
        margin-right: -160px;
        height: 10px; /* Adjust margin-top as needed for smaller screens */
      }
    }
  </style>
</head>
<body>
  <center>
    <div id="home" class="slider-area" style="margin-top: 100px;">
      <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
          <?php foreach ($baner->result_array() as $i) :
            $gambar=$i['gambar'];
            $slide=$i['slider'];
          ?>
          <img src="<?php echo base_url().'assets/home/baner/'.$gambar;?>" alt="" title="#<?php echo $slide;?>" />
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </center>

      <!-- direction 1 -->
      <?php foreach ($baner->result_array() as $i) :
          $judul=$i['judul'];
          $slider=$i['slider'];
          $ket=$i['ket'];
          $class=$i['class'];
        ?>
      <div id="<?php echo $slider;?>" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
             
                <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s" >
                  <h2 class="title1"><?php echo $judul;?></h2>
                </div>
                 
                <!-- <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo $judul;?></h2>
                </div> -->
                <!-- layer 2 -->
                <div class="layer-1-2 hidden-xs wow slideInLeft" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo $ket;?></h1>
                </div>
                <!-- layer 3 -->
                <br>
                <br>
                <br>
                <div class="centered-link">
                <div class="layer-1-3 wow slideInRight" data-wow-duration="2s" data-wow-delay=".2s">
                  <!-- <a class="ready-btn right-btn page-scroll" href="#services">See Services</a> -->
                  <a class="ready-btn page-scroll" target="_blank" href="https://linktr.ee/ppdbiubs2023">Daftar Siswa Baru</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
     <?php endforeach;?>
    </div>
    </div></center>
  <!-- End Slider Area -->
    <!-- Start About area -->
  <div id="tentang/ishlahulummah" class="about-area area-padding" style="background: #fbdbe9; ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 wow slideInUp" data-wow-duration="5s" data-wow-delay=".5s">
          <div class="section-headline text-center">
          
            <h2 style="margin-top: -25%; margin-bottom: 100px; color: #000;">Tentang Kami</h2>
         
          </div>
        </div>
      </div>
      <div class="row" style="box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.8); margin-top: -50px;">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="well-left">
          <div class="row">

             <div class="col-mt-3 pb-3">
                <div class="carousel-video owl-carousel">
                  <?php foreach($video->result_array() as $v) :
                      $kode=$v['id_video'];
                      $link_video=$v['link_video'];
                    ?>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" style="border: 3px solid #fff; border-radius: 10px; height: 90%; margin-top: 15px; width: 90%; margin-left: 30px;"
                    src="<?php echo $link_video;?>" allowfullscreen>
                      
                    </iframe>
                  </div>
                  <?php endforeach;?>
                </div>
             </div>
              
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12 wow slideInRight" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="well-middle">
            <br>
            <br>
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head"><?php echo $title['identitas_moto'];?></h4>
              </a>
              <p style="color: #50267a;font-family: Montserrat-Light;">
              <?php echo $title['identitas_tentang'];?>
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  

  <!-- 10 Alasan -->

      <div class="alasan" style="height: auto; margin: 30px 0 30px 0;">
         <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="carousel-alasan owl-carousel alasan-owl" style="margin-top: 5%;">
                    <?php foreach ($alasan->result_array () as $a) :
                      $kode=$a['alasan_id'];
                      $gambar=$a['alasan_gambar'];
                    ?>
                      <img src="<?php echo base_url().'assets/images/alasan/'.$gambar;?>"  alt="">
                    <?php endforeach;?>
                  </div>
              </div>
              <div class="col-8 col-md-6" style="margin: 30px 0 30px 0;">
                <h1 style="font-family: Poppins;">10 Alasan Mengapa Harus Memilih Ishlahul Ummah</h1>
                  <ul>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Lokasi strategis berada di pusat kota</p>
                    </li>
                    <li style="margin: 10px 0 10px 0;"> 
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Fasilitas memadai dengan biaya terjangkau</p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Kurikulum yang terpadu dengan menggabungkan antar kurikulum nasional dan <span style="margin-left: 28px;">kurikulum ke pesantrenan</span></p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Suasana asrama yang nyaman</p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Lingkungan sosial yang heterogen dengan latar belakang santriwati yang berasal <span style="margin-left: 28px;">dari berbagai daerah di tanah air</span></p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Memiliki SDM pendidik dan teangara kependidikan dari Perguruan Tinggi dalam  <span style="margin-left: 28px;"> luar negeri</span></p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Memfasilitasi minat dan bakat santriwati di berbagai bidang</p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"> <img src="assets/home/img/ic_check.svg" alt="">Pergaulan lebih terjaga karena khusus putri-putri pilihan</p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Menghafal Al-Qur'an dengan mutqin</p>
                    </li>
                    <li style="margin: 10px 0 10px 0;">
                      <p style="font-size: 1em; color: black;"><img src="assets/home/img/ic_check.svg" alt=""> Memiliki program dan kegiatan keputrian</p>
                    </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
       
  <!-- End 10 Alasan -->

  

<?php $sakola = $this->uri->segment(1);

 if(empty($sakola)) :?>
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2 style="color: #000;">Artikel</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="carousel owl-carousel">
            <!-- Start Left Blog -->
            <?php foreach ($berita->result() as $row) :?>
            <div class="col-md-4">
              <div class="single-blog-index" style="width: 300px;">
                <p style="color: #000;" class="blog-meta"><?php echo $row->tulisan_author;?><span><?php echo $row->tanggal;?></span> </p>
                <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>">
                <h2><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></h2>
                
                <p><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="read-more-btn">Read More</a>              </p>
              </div>
            </div>
            <?php endforeach;?>
            <!-- End Blog-->
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <?php else:?>

  <?php endif;?>

 <!-- Start Testimonials -->
   <section class="testi">
      <div class="container">
        <div class="row">
          <br>
          <br>
          <!-- <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1"> -->
            <div class="section-headline text-center" style="text-align: center;">
              <h1 style="color: #000;">Testimonial</h1>
              <center><hr style="color: #8fbc54; width: 100px;"></center>
            </div>
          <!-- </div> -->
        </div>
        <div class="row">
          <div class="clients-carousel owl-carousel">

             <?php
                foreach ($client->result_array() as $i) :
                  $kode=$i['client_id'];
                  $nama=$i['client_nama'];
                  $deskripsi=$i['deskripsi_client'];
                  $gambar=$i['client_gambar'];
                  $jabatan=$i['jabatan'];
            ?>
            <div class="carousel-item-test active">
              <div class="img-box"><img src="<?php echo base_url().'assets/images/'.$gambar;?>" alt=""></div>
              <p class="testimoniall"><?php echo $deskripsi;?></p>
              <p class="overview"><b><?php echo $nama;?></b><?php echo $jabatan;?></p>
            </div>
            <?php endforeach;?>

          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials -->
    
     <!-- Faq area start -->
  <div id="ekskul" class="faq-area area-padding">
    <div class="container">
      <div class="row wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <br>
            <h2>Ekstrakurikuler</h2>
          </div>
        </div>
      </div>
      <div class="row">
      
        <div class="col-md-6 col-sm-6 col-xs-12 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="pilihan">
          <h3>Pilihan <img src="<?php echo base_url().'assets/home/list.svg'?>"  style="width:25px;"></h3>  
          </div>
         <div class="faq-details" >
            <div class="panel-group" id="accordion" >
              <!-- Panel Default -->
              <div class="panel panel-default">
              <?php foreach ($faq_l->result_array() as $i) :?>
                <div class="panel-heading" style="background-color: #50267a ;">
                  <h4 class="check-title">
                    <a data-toggle="collapse" class="<?php echo $i['active'];?>" data-parent="#accordion" href="#<?php echo $i['href'];?>">
                      <span class="acc-icons"></span><?php echo $i['pertanyaan'];?>
                    </a>
                    </h4>
                </div>
                <div id="<?php echo $i['href'];?>" class="panel-collapse collapse <?php echo $i['active'];?>">
                  <div class="panel-body">
                    <p><img src="<?php echo base_url().'assets/images/'.$i['gambar'];?>" style="border-radius: 10px;"></p>
                    <p style="color: #000;">
                      <?php echo $i['jawaban'];?>
                    </p>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
              <!-- End Panel Default -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 wow slideInRight" data-wow-duration="2s" data-wow-delay=".2s">
        <h3>Wajib <img src="<?php echo base_url().'assets/home/requirement.svg'?>" style="width:30px;"></h3>
        <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" style="background-color: #50267a ;">
            <?php foreach ($faq_r->result_array() as $r) :?>
              <li class="<?php echo $r['active'];?>">
                <a style="color:white;" href="#w<?php echo $r['href'];?>" role="tab" data-toggle="tab"><?php echo $r['pertanyaan'];?></a>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="tab-content">
          <?php foreach ($faq_r->result_array() as $r) :?>
            <div class="tab-pane <?php echo $r['active'];?>" id="w<?php echo $r['href'];?>">
              <div class="tab-inner">
                <div class="event-content head-team">
                <p>
                  <p><img src="<?php echo base_url().'assets/images/'.$r['gambar'];?>"></p>
                    <p style="color: #000;">
                  <?php echo $r['jawaban'];?>
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

  <!-- Start quotes -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 wow slideInRight" data-wow-duration="2s" data-wow-delay=".2s">
            <!-- Start quotes Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start quotes carousel -->
              <div class="testimonial-carousel">
              <?php
                foreach ($testi->result_array() as $i) :
                  $kode=$i['testimoni_id'];
                  $nama=$i['testimoni_nama'];
                  $isi=$i['testimoni_isi'];
                  $email=$i['testimoni_email'];
                  $tanggal=$i['testimoni_tanggal'];
                  $gambar=$i['gambar'];
                 ?>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      <?php echo $isi;?>
                    </p>
                    <h6><?php echo $nama;?></h6>
                  </div>
                </div>
              <?php endforeach;?>
                <!-- End single item -->
              </div>
            </div>
            <!-- End quotes end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End quotes -->
  
  <!-- Start Aplikasi Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
          <div class="suscribe-text text-center">
            <h3>Daftarkan diri anda sekarang juga</h3>
            <a class="sus-btn" target="_blank" href="<?php echo base_url('daftar');?>">Daftar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Aplikasi Area -->

  
  
<?php
    $this->load->view('depan/footer');
?> 

 <!-- <div class="popup">
  <div class="contentBox">
    <div class="closeP"><i class="fa fa-close" style="margin-left: 14px; margin-top:12px;"></i></div>
    <div class="imgBx">
      <img src="<?php echo base_url().'assets/home/woman.png'?>" alt="">
    </div>
    <div class="contentPopup">
      <div>
        <h3>Daftarkan Diri Anda!</h3>
        <p>Jadilah Generasi Muslimah Sholehah Dan Cerdas</p>
        <a href="<?= base_url('daftar');?>">Daftar</a>
      </div>
    </div>
  </div>
</div> -->
  <div id="myDiv"></div>

  <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->


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


</body>
<script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           dots: false,
           navigation: false,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             768:{
               items:2,
               nav: false
             },
             1170:{
               items:3,
               nav: false
             }
           }
         });
        $('.clients-carousel').owlCarousel({
	           loop: true,
	           nav: false,
	           autoplay: true,
             dots: false,
	           autoplayTimeout: 5000,
	           animateOut: 'fadeOut',
	           animateIn: 'fadeIn',
	           smartSpeed: 450,
	           margin: 30,
	           responsive: {
	               0: {
	                   items: 1
	               },
	               768: {
	                   items: 1
	               },
	               991: {
	                   items: 1
	               },
	               1200: {
	                   items: 1
	               },
	               1920: {
	                   items: 1
	               }
	           }
	       });
         $(".carousel-video").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 4500,
           autoplayHoverPause: true,
           dots: false,
           navigation: false,
           responsive: {
             0:{
               items:1,
               nav: false
             },
           }
         });
         $(".carousel-alasan").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 4500,
           autoplayHoverPause: true,
           dots: false,
           navigation: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
           }
         });

      </script>
<script>
  const popup = document.querySelector('.popup');
  const closeP = document.querySelector('.closeP');

  window.onload = function() {
    setTimeout(function() {
      popup.style.display ="block";
    }, 5000)
  }

  closeP.addEventListener('click', () => {
    popup.style.display ="none";
  })
</script> 

<script type="text/javascript">
  $(function () {
    $('#myDiv').floatingWhatsApp({
      phone: '6283878271548',
      showPopup: 'True',
      popupMessage: "Mau bertanya apa?",
      headerTitle: "Whatsapp Chat",
      position: "right"
    });
  });
</script>
</html>
