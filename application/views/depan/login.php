<!-- start header -->
<?php
    $this->load->view('depan/v_header');
?>
    <!-- end header -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>assets/home/img/bg-img/24.jpg);">
            <h2>Login</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area mb-100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7">
                    <div class="checkout_details_area clearfix">
                    <form action="<?php echo base_url('admin/user/cek_login');?>" method="POST">
                        <h5>Login Akun</h5>
                                <div class="row">
                                <div class="col-12 mb-4">
                                    <label for="username">User Name *</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="pass">Password *</label>
                                    <input type="password" class="form-control" name="pass" >
                                </div>
                            </div>
                            <p><strong>Belum Daftar? </strong> <span><small><a href="<?php echo base_url('admin/user/daftar');?>"> Daftar Sekarang</a></small></span></p>
                            <div class="col-md-3 mb-4">
                            <button type="submit" class="btn alazea-btn w-100">Login</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <!-- ##### Checkout Area End ##### -->
<?php foreach ($data->result_array() as $i) :
                       $pengguna_id=$i['identitas_id'];
                       $pengguna_nama=$i['identitas_nama'];
                       $pengguna_deskripsi=$i['identitas_deskripsi'];
                       $pengguna_email=$i['identitas_email'];
                       $pengguna_alamat=$i['identitas_alamat'];
                       $pengguna_nohp=$i['identitas_nohp'];
                       $pengguna_map=$i['identitas_map'];
                       $pengguna_tentang=$i['identitas_tentang'];
                       $pengguna_facebook=$i['identitas_facebook'];
                       $pengguna_twitter=$i['identitas_twitter'];
                       $pengguna_google_plus=$i['identitas_google_plus'];
                       $pengguna_ig=$i['identitas_ig'];
                       $pengguna_yt=$i['identitas_yt'];
                    ?>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(<?php echo  base_url();?>assets/home/img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="<?php echo  base_url();?>assets/home/img/core-img/logo.png" alt=""></a>
                            </div>
                            <p><?php echo $pengguna_tentang;?></p>
                            <div class="social-info">
                                <a href="https://www.<?php echo $pengguna_facebook;?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.<?php echo $pengguna_twitter;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.<?php echo $pengguna_google_plus;?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="https://www.<?php echo $pengguna_ig;?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.<?php echo $pengguna_facebook;?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Purchase</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Return</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Policities</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>LATEST NEWS</h5>
                            </div>
                             <?php foreach ($limit->result() as $row) :?>
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo $row->tulisan_judul;?></a>
                                    <p><?php echo $row->tulisan_tanggal;?></p>
                                </div>
                            </div>
                             <?php endforeach;?>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span><?php echo $pengguna_alamat;?></p>
                                <p><span>Phone:</span><?php echo $pengguna_nohp;?></p>
                                <p><span>Email:</span> <?php echo $pengguna_email;?></p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                    <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.kasava.co.id/UKM" target="_blank">Ilham Efendi</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url();?>">Home</a></li>
                                    <li><a href="<?php echo base_url('about');?>">About</a></li>
                                   <!--  <li><a href="<?php echo base_url('about');?>">Sejarah</a></li> -->
                                    <li><a href="<?php echo base_url('blog');?>">Blog</a></li>
                                    <li><a href="<?php echo base_url('portofolio');?>">Portfolio</a></li>
                                    <li><a href="<?php echo base_url('contact');?>">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url();?>assets/home/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>assets/home/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>assets/home/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url();?>assets/home/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>assets/home/js/active.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/script/aplication/login/auth.js"></script>
    <?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#e55324'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='warning'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Warning',
                    text: "Gambar yang Anda masukan terlalu besar.",
                    showHideTransition: 'slide',
                    icon: 'warning',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FFC017'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pasien Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Pasien berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pasien Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='show-modal'):?>
        <script type="text/javascript">
                $('#ModalResetPassword').modal('show');
        </script>
    <?php else:?>

    <?php endif;?>

    <script type='text/javascript'>
    //<![CDATA[
    var Nanobar=function(){var c,d,e,f,g,h,k={width:"100%",height:"4px",zIndex:9999,top:"0"},l={width:0,height:"100%",clear:"both",transition:"height .3s"};c=function(a,b){for(var c in b)a.style[c]=b[c];a.style["float"]="left"};f=function(){var a=this,b=this.width-this.here;0.1>b&&-0.1<b?(g.call(this,this.here),this.moving=!1,100==this.width&&(this.el.style.height=0,setTimeout(function(){a.cont.el.removeChild(a.el)},100))):(g.call(this,this.width-b/4),setTimeout(function(){a.go()},16))};g=function(a){this.width=
    a;this.el.style.width=this.width+"%"};h=function(){var a=new d(this);this.bars.unshift(a)};d=function(a){this.el=document.createElement("div");this.el.style.backgroundColor=a.opts.bg;this.here=this.width=0;this.moving=!1;this.cont=a;c(this.el,l);a.el.appendChild(this.el)};d.prototype.go=function(a){a?(this.here=a,this.moving||(this.moving=!0,f.call(this))):this.moving&&f.call(this)};e=function(a){a=this.opts=a||{};var b;a.bg=a.bg||"#dd4b39";this.bars=[];b=this.el=document.createElement("div");c(this.el,
    k);a.id&&(b.id=a.id);b.style.position=a.target?"relative":"fixed";a.target?a.target.insertBefore(b,a.target.firstChild):document.getElementsByTagName("body")[0].appendChild(b);h.call(this)};e.prototype.go=function(a){this.bars[0].go(a);100==a&&h.call(this)};return e}();
    var nanobar = new Nanobar();nanobar.go(30);nanobar.go(60);nanobar.go(100);
    //]]>
    </script>
</body>

</html>