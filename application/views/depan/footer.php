<!-- Start Footer bottom Area -->
<?php
$title=$this->db->query("SELECT * FROM tbl_identitas")->row_array();

?>
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <!-- <h2><span>DIJ</span>APRI</h2> -->
                  <?php
                  $b=$this->db->query("SELECT * FROM tbl_identitas")->row_array();
                  ?>
                 
                
                </div>

                <div class="col  mt-3 pb-3">
                <div class="embed-responsive embed-responsive-16by9">
                  <img src="assets/home/logo.png" style="width: 90%; margin-left: -60px;" alt="">
                </div>
                
              </div>
                <div class="footer-icons">
                <h4><strong>SELALU TERHUBUNG</strong></h4>
                  <ul>
                  <li class="wow slideInLeft">
                      <a target="_blank" href="https://api.whatsapp.com/send?phone=62<?php echo $b['identitas_nohp'];?>&text=Assalamu'alaikum%20Ummi/%20Abbi%20silahkan%20untuk%20%0Amendaftarkan putrinya"><i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li class="wow slideInDown">
                      <a target="_blank" href="<?php echo $b['identitas_facebook'];?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <!-- <li class="wow slideInUp">
                      <a target="_blank" href="<?php echo $b['identitas_twitter'];?>"><i class="fa fa-twitter"></i></a>
                    </li> -->
                    <li class="wow slideInDown">
                      <a target="_blank" href="<?php echo $b['identitas_google_plus'];?>"><i class="fa fa-google"></i></a>
                    </li>
                    <li class="wow slideInRight">
                      <a target="_blank" href="<?php echo $b['identitas_ig'];?>"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-head">
                <h4><strong>LATEST NEWS</strong></h4>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog-last">
                <div class="recent-post">
                <?php foreach ($limit->result() as $row) :?>
                  <!-- start single post -->
                  <div class="recent-single-post" style="background: #795695 !important;">
                    <div class="post-img">
                      <a style="color: #fff;" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                           <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="">
                        </a>
                    </div>
                    <div class="pst-contents">
                      <p><strong><a  style="color: #fff;" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,4).'...';?></a></strong></p>
                      
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
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4><strong>informasi</strong></h4>
                <div class="footer-contacts">
                  <p><span><i class="fa fa-map-marker"></i> Alamat:</span> <?php echo $b['identitas_alamat'];?></p>
                  <p><span><i class="fa fa-phone"></i> Telp:</span> <?php echo $b['identitas_nohp'];?></p>
                  <p><span><i class="fa fa-envelope"></i> E-mail:</span> <?php echo $b['identitas_email'];?></p>
                  <p><span><i class="fa fa-clock-o"></i> Buka:</span> Senin - Sabtu 07.15 AM - 15.30 PM</p>
                  <p><span><i class="fa fa-close"></i> Tutup:</span> Minggu</p>
                  <?php
                  foreach($thisday->result() as $i) :?>
                  <p><span><i class="fa fa-users"></i> Pengunjung Hari ini:</span><?=  $i->jumlah;?></p>
               <?php endforeach;?>
                <?php
                  foreach($thismont->result() as $i) :?>
                  <p><span><i class="fa fa-calendar"></i> Pengunjung Bulan ini:</span><?=  $i->jumlah;?></p>
               <?php endforeach;?>
                
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->

        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-left">
              <p>
                Copyright &copy; <?php echo 2019;?> - <?php echo date('Y');?> <strong><a href="<?php echo base_url();?>"><?php echo $title['identitas_nama'];?></a></strong> All Rights Reserved
              </p>
            
            </div>
           <!--  <div class="credits">
              
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "'<?php echo $title['identitas_nohp'];?> '", // WhatsApp number
            call_to_action: "Kirimi kami pesan", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

  