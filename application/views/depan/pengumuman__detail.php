<!-- Start Header -->
<?php
    $this->load->view('depan/v_header');
?>
  <!-- header end -->
  <!-- Start Bottom Header -->
 <br>
 <br>
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="<?php echo site_url('blog/search');?>" method="get">
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
                      <p><strong><a style="color: #fff;" href="<?php echo site_url('artikel/'.$row->pengumuman_slug);?>"><?php echo limit_words($row->pengumuman_judul,3).'...';?></a></strong></p>
                      <p><?php echo limit_words($row->pengumuman_deskripsi,5).'...';?></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <?php endforeach;?>
                </div>
              </div>
              <!-- recent end -->
            </div>
            <!-- <div class="single-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                <?php foreach ($category->result() as $row) : ?>
                  <li>
                    <a href="<?php echo site_url('blog/Tags/'.str_replace(" ","-",$row->kategori_nama));?>"><?php echo $row->kategori_nama;?></a>
                  </li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div> -->
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                  <?php foreach ($category->result() as $row) : ?>
                    <li>
                      <a href="<?php echo site_url('blog/Tags/'.str_replace(" ","-",$row->kategori_nama));?>"><?php echo $row->kategori_nama;?></a>
                    </li>
                  <?php endforeach;?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <?php
          $query=$this->db->query("SELECT * FROM tbl_komentar");
          $jml=$query->num_rows();
        ?>
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="<?php echo base_url().'assets/images/'.$image?>" alt="" />
                </div>
                <div class="post-information">
                  <h2><?php echo $title;?></h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#"><?php echo $author;?></a></span>
                    <span><i class="fa fa-clock-o"></i><?php echo $tanggal;?></span>
                    <!-- <span class="tag-meta">
												<i class="fa fa-folder-o"></i>
												<a href="#">painting</a>,
												<a href="#">work</a>
											</span> -->
                  
                    <!-- <span><i class="fa fa-comments-o"></i> <a href="#"><?php echo $jml;?> comments</a></span> -->
                  </div>
                  <div class="entry-content">
                    <p><?php echo $pengumuman;?></p>
                    <?php if ($link_driv) :?>
                       <a href="<?php echo $link_driv;?>" class="btn btn-success">Download</a>
                       <?php else :?>

                      <?php endif;?>
                  </div>
                </div>
                  <div class="pull-left"><h5>Bagikan Ke: &nbsp;</h5>
                  <div class="sharePopup"></div>
              </div>
              </article>
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

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
  <!-- Button -->
  <script type="text/javascript">
  function redirect(url){
    location.href = url;
  }
  </script>
  <script src="<?php echo base_url();?>assets/bpn/js/main.js"></script>
  <script src="<?php echo base_url().'theme/js/jssocials.js'?>"></script>
        <script>
          $(document).ready(function(){
            $(".sharePopup").jsSocials({
                  showCount: true,
                        showLabel: true,
                        shareIn: "popup",
                        shares: [
                        { share: "twitter", label: "Twitter" },
                        { share: "facebook", label: "Facebook" },
                        { share: "line", label: "LINE" },
                        { share: "whatsapp", label: "WhatsApp" }
                        // { share: "pinterest", label: "Pinterest" }
                        ]
                });
          });
        </script>
</body>

</html>
