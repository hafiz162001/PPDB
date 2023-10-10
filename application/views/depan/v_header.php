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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css">
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
                <a href="<?php echo $b['identitas_yt'];?>"><i class="fa fa-youtube ic-yt" style="color: #795695;"></i></a>
              </span>
               <span class="text-white" style="padding: 7px;">
                <a href="<?php echo $b['identitas_twitter'];?>"><img src="assets/home/tiktok.svg" style="fill: #795695; width: 10px;" alt=""></a>
                </span>   
                    

            </div>
            
          </div>
        </div>
  </section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

              <nav class="navbar navbar-default">
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
                  <img src="assets/home/Logo-IUBS.png" title="">
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
                    <a class="page-scroll" href="<?php echo base_url();?>#ekskul">Ekstrakurikuler</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="<?php echo base_url();?>kontak-kami">Kontak</a>
                  </li> -->
                  <?php $tahun1 = date('Y');
                        $tahun2 = date('Y') + 1 ?>

                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PPDB <?= $tahun1.'/'.$tahun2;?><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <!-- <li><a href="<?php echo base_url('artikel/biaya-investasi-pendidikan');?>">Pembiayaan</a></li> -->
                      <li><a href="https://linktr.ee/ppdbiubs2023">Pendaftaran Peserta Didik Baru</a></li>
                      <li><a href="<?= base_url('berkas');?>">Download Berkas</a></li>
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
  