<?php
$title=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title['identitas_nama'];?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ishlahul,ummah,ishlahulummah, tasik, tasikmalaya, smp, sma, islam, terpadu, it, boarding, putri, pesantren, tahfidz, santri, pondok, asrama," />
<meta name="copyright" content="Copyright 2011 Ishlahul Ummah Tasikmalaya " />
<meta name="language" content="in,en" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="revisit-after" content="1 days" />
<meta name="expires" content="never" />
<meta name="title" content="Ishlahul Ummah Tasikmalaya "/>
<meta name="description" content="" />
  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/bpn/img/load.png" rel="icon">
  <link href="<?php echo base_url().'assets/home/logo/'.$title['identitas_logo'];?>" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  
  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>assets/bpn/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>assets/bpn/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bpn/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bpn/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bpn/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bpn/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bpn/lib/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
  

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url();?>assets/bpn/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>assets/bpn/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/bpn/css/custom.css" rel="stylesheet">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url();?>assets/bpn/css/responsive.css" rel="stylesheet">
  <!--Social Share-->
  <link href="<?php echo base_url().'theme/css/jssocials.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'theme/css/jssocials-theme-flat.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/rvslider.latest/css/rvslider.min.css'?>" rel="stylesheet">

  
  <style>
    @media only screen and (min-device-width : 320px) and (max-device-width : 980px) {
      .top {
        display: none;
      }

      .sgl-daftar {
        display: none;
      }

      .plr-tags {
        display: none;
      }

      .guru {
        height: 130px;
      }

      .sticky-logo {
        display: none;
      }

      .nama-area h4{
          /* margin-top: 1px; */
          /* position: absolute; */
          width: 50px;
          height: 25px;
          overflow: hidden;
          right: -150px;
          font-size: 0.1em;
          color: white;
        }
    }

    @media (max-width: 767px) {
      .guru {
        height: 130px;
      }

      .img-area {
        width: 100px;
        height: 100px;
        margin-right: -50px;

      }

      .img-area img {
        width: 100%;
      }

      .ngajar {
        margin-right: -80px
      }

      .ic-guru {
        margin-right: -120px
      }

      .gmail {
        margin-left: 40px;
      }

       .img-sakola{
        width: 100px;
      } 

      .judul {
        font-size: 1.1rem;
      }

      .sc-sakola {
        margin-left: 100px;
      }

      .logo-sakola {
        margin-left: -290px;
      }

      /* .card-sma{
        margin-left: -230px;
        width: 50px;
        height: 50px;
      }

      .card-smp{
        margin-left: -230px;
        width: 50px;
        height: 50px;
      } */
      /* .smp{
        width: 20px;
        height: 20px;
      } */

    }

    .ic-fb,
    .ic-twt,
    .ic-yt,
    .ic-ig { 
      color: white;
    } 
    .ic-fb:hover,
    .ic-twt:hover,
    .ic-yt:hover,
    .ic-ig:hover { 
      color: #ec1e80;
    } 

    .carousel{
  max-width: 1200px;
  margin: auto;
  padding: 0 30px;
}
.carousel .card{
  color: transparent;
  text-align: center;
  margin: 20px 0;
  line-height: 150px;
  font-size: 90px;
  font-weight: 600;
  border-radius: 10px;
  /* box-shadow: 0px 4px 15px rgba(0,0,0,0.2); */
}
.carousel .card-1{
  /* background: #ed1c24; */
}

.owl-next {
  display: block;
  color: transparent;
  background: transparent;
  border: none;
}

.owl-prev{
  display: block;
  color: transparent;
  background: transparent;
  border: none;
}

/* .owl-dots{
  text-align: center;
  margin-top: 40px;
} */
/* .owl-dot{
  height: 15px;
  width: 45px;
  margin: 0 5px;
  outline: none;
  border-radius: 14px;
  border: 2px solid #0072bc!important;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
} */
/* .owl-dot.active,
.owl-dot:hover{
  background: #0072bc!important;
} */

.clear:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden
}

.guru {
  height: 130px;
}

.img-area{
  position: absolute;
  width: 90px;
  height: 90px;
  border: 5px solid #fff;
  overflow: hidden;
  top: 43px;
  right: 270px;
  border-radius: 50%;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);

}

.img-area img {
  width: 100%;

}

.nama-area {
  margin-top: 30px;
  position: absolute;
  width: 200px;
  height: 25px;
  overflow: hidden;
  left: 100px;
  font-size: 0.5em;
  background: #50267a;
	border-radius: 10px;
}

.nama-area h4 {
  width: 100%;
}

.ngajar {
  font-size: 1.3rem; color: #50267a; widht: 50px; height:30px; left: 800px;
}

.ic-guru {
  width: 10px;
  height: 10px;
  font-size: 12px;
  margin-top: -20px;
  position: absolute;
  margin-left: -63px;
}

.single-blog-index {
    box-shadow: 0px 0px 20px 1px rgba(0, 0, 0, 0.1);
    padding: 10px;
    background: #fff;
    border-radius: 8px;
}

.single-blog-index img {
  width: 100%;
}

.blog-meta {
  font-size: 14px;
  margin-bottom: 2px;
}
.single-blog-index span {
  float: right;
  font-size: 12px;
  color: cornflowerblue;
}
.blog-text {
  font-size: 14px;
  text-align: justify;
  color: #000;
}
.single-blog-index h2{
  margin-top: 10px;
  font-size: 20px;
  color: #007bff;
}
.single-blog-index h2 a{
  text-decoration: none;
}
.read-more-btn{
  background-image: linear-gradient(to right, #1c03b5, #5c9bef);
  padding: 5px 12px 8px;
  border-radius: 20px;
  line-height: 20px;
  font-size: 14px;
  color: #fff;
  border: none !important;
}

/* .card {
    height: 300px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
    border-radius: 16px !important;
    transition: .5s;
}

.card:hover {
    box-shadow: 0px 60px 10px -40px rgba(0, 0, 0, .15);
    margin-top: -40px;
} */

/* .card-smp img,
.card-sma img {
  width: 90%;
  height: 90%;
  margin-top: 15px;
  margin-left: 6px;
} */

.btn-smp{
  border-color: #fff;
  background: #50267a;
  color: #fff;
  text-decoration: none;
  border-radius: 50px;
  margin-left: 50px;
  margin-top: 10px;
}

.sc-sakola {
  margin-left: 300px;
}

.donate {
    border-radius: 20px;
    background-color: #3DB5E2;
    margin-top: 5px;
    font-size: 1.8rem;
    color: white;
}
/* .owl-carousel .owl-video-tn {
  background-size: cover;
  padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
}

.owl-video-frame {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.owl-video-frame iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.owl-dots {
  text-align: center;
  margin-top: 20px;
}

.owl-dot {
  display: inline-block;
}

.owl-dot span {
  width: 11px;
  height: 11px;
  background-color: #ccc;
  border-radius: 50%;
  display: block;
  margin: 5px 3px;
} */

/* .owl-dot.active span {
  background-color: #000;
} */
h2 {
	color: #333;
	text-align: center;
	text-transform: uppercase;
	font-family: "Roboto", sans-serif;
	font-weight: bold;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 3px;
	background: #8fbc54;
	left: 0;
	right: 0;
	bottom: -10px;
}
.col-center-testi {
	margin: 0 auto;
	float: none !important;
}
.carousel-testi {
	padding: 0 70px;
}
.carousel-testi .carousel-item {
	color: #999;
	font-size: 14px;
	text-align: center;
	overflow: hidden;
	min-height: 290px;
}
.carousel-testi .carousel-item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel-testi .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel-testi .testimonial {
	padding: 30px 0 10px;
}
.carousel-testi .overview {	
	font-style: italic;
}
.carousel-testi .overview b {
	text-transform: uppercase;
	color: #7AA641;
}
.carousel-control-prev, .carousel-control-next {
	width: 40px;
	height: 40px;
	margin-top: -20px;
	top: 50%;
	background: none;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 68px;
	line-height: 42px;
	position: absolute;
	display: inline-block;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 12px;
	height: 12px;
	margin: 1px 3px;
	border-radius: 50%;
	border: none;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
  </style>

  <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- <div id="preloader"></div> -->

   <!-- header-area starts -->
   <div id="sticker" class="header-area">

   <section class="top" style="background-color: #ffffff !important">
      <?php
        $b=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
      ?>
        <div class="container">
          <div class="row top-bar" style="font-size: 15px; padding: 5px;">
            <div class="col text-left" style="float: left;">
           
              <span class="text-white">
                
              </span>
              <marquee direction="right" scrollamount="5" height="20px" width="100%">
                <span class="text-white" style="color: #795695;">
                  <i class="fa fa-map-marker"></i>
                  <?php echo $b['identitas_alamat'];?>
                </span>
              </marquee>
              

            </div>

            <div class="col text-right">
            <span class="text-white icon-top" style="padding: 7px;">
                <a href="<?php echo $b['identitas_facebook'];?>"><i class="fa fa-facebook ic-fb" style="color: #795695;"></i></a>
              </span>
              <span class="text-white" style="padding: 7px;">
                <a href="<?php echo $b['identitas_ig'];?>"><i class="fa fa-instagram ic-ig" style="color: #795695;"></i></a>
              </span>
              <span class="text-white" style="padding: 7px;">
                <a href="<?php echo $b['identitas_twitter'];?>"><i class="fa fa-youtube ic-yt" style="color: #795695;"></i></a>
              </span>
               <span class="text-white" style="padding: 7px;">
                <a href="<?php echo $b['identitas_twitter'];?>"><i class="fa fa-google ic-google" style="color: #795695;"></i></a>
              </span>
               <span class="text-white" style="padding: 7px;">
                <a href="<?php echo $b['identitas_twitter'];?>"><i class="fa-brands fa-tiktok"></i></a>
                </span>       

            </div>
            
          </div>
        </div>
  </section>

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

              <nav class="navbar navbar-default" style="background: rgba(255, 221, 238, 0.3);">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url();?>">
                  <!-- <h1><span>DIJ</span>APRI</h1> -->
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <?php
                  $b=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
                  ?>
                  <img src="<?php echo base_url().'assets/home/logo/'.$b['identitas_logo'];?>" title="">
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
              <?php
                $status = $this->uri->segment(1);
                if($status == 'smp') :?>
              <ul class="nav navbar-nav navbar-right" style="margin-top : 30px;">
                  <li>
                    <a class="page-scroll" href="<?php echo base_url();?>">Beranda SMP</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('smp/artikel/visi-misi-smp');?>">Visi Misi</a>
                  </li>
              
                  
                </li>

                  <li>
                    <a class="page-scroll" href="<?php echo base_url('artikel/mata-pelajaran-smp-it-ishlahul-ummah');?>">Mata Pelajaran</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('smp');?>/#team">Guru</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>#jasa-kami">Jasa</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('blog/Tags/Prestasi');?>">Prestasi</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>kontak-kami">Kontak</a>
                  </li> -->
                 
                </ul>

                <?php elseif($status == 'sma') :?>
              <ul class="nav navbar-nav navbar-right" style="margin-top : 30px;">
                  <li>
                    <a class="page-scroll" href="<?php echo base_url();?>">Beranda SMA</a>
                  </li>
                  
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>#tentang/ishlahulummah">Tentang Kami</a>
                  </li> -->
                  <!-- <li>
                    <a class="page-scroll" href="http://localhost/ishlahulummahtasik/artikel/visi-dan-misi-yayasan-ishlahul-ummah-kota-tasikmalaya">Visi Misi</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('artikel/visi-misi-sma-ishlahul-ummah');?>">Visi Misi</a>
                  </li>
              
                  
                </li>

                  <li>
                    <a class="page-scroll" href="<?php echo base_url('artikel/mata-pelajaran-sma-it-ishlahul-ummah');?>">Mata Pelajaran</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('sma');?>/#team">Guru</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>#jasa-kami">Jasa</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('blog/Tags/Prestasi');?>">Prestasi</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url('blog/Tags/alumni');?>">Alumni</a>
                  </li> -->
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>kontak-kami">Kontak</a>
                  </li> -->
                  
                </ul>
                <?php else:?>

              <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="<?php echo base_url();?>">Beranda</a>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang Kami<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo base_url('sejarah');?>">Sejarah</a></li>
                      <li><a href="<?php echo base_url('program');?>">Pogram Unggulan</a></li>
                      <!-- <li><a href="<?php echo base_url('artikel/kegiatan-harian-santriwati');?>">Kegiatan Siswa</a></li> -->
                      <li><a href="<?php echo base_url('kurikulum');?>">Kurikulum</a></li>
                      <!-- <li><a href="<?php echo base_url('artikel/alumni-yayasan-ishlahul-ummah-kota-tasikmalaya');?>">Alumni</a></li> -->
                       <li><a href="<?php echo base_url('guru');?>">Guru & Staff</a></li>
                    </ul> 
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>#tentang/ishlahulummah">Tentang Kami</a>
                  </li> -->
                  <!-- <li>
                    <a class="page-scroll" href="http://localhost/ishlahulummahtasik/artikel/visi-dan-misi-yayasan-ishlahul-ummah-kota-tasikmalaya">Visi Misi</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('galeri');?>">Galery</a>
                  </li>
              
                  
                </li>

                  <li>
                    <a class="page-scroll" href="<?php echo base_url();?>blog">Artikel</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url();?>pengumuman">Pengumuman</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>#jasa-kami">Jasa</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="<?php echo base_url();?>#ekskul">Ekstrakulikuler</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>kontak-kami">Kontak</a>
                  </li> -->
                  <?php $tahun1 = date('Y');
                        $tahun2 = date('Y') + 1 ?>

                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PPDB <?= $tahun1.'/'.$tahun2;?><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo base_url('artikel/biaya-investasi-pendidikan');?>">Pembiayaan</a></li>
                      <li><a href="<?= base_url('daftar');?>">Pendaftaran Peserta Didik Baru</a></li>
                    </ul> 
                  </li>
                </ul>
                <?php endif;?>


              </div>
              <!-- navbar-collapse -->
            </nav>

            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
  