<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url();?>assets/bpn/img/load.png" rel="icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('aassets/assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/metisMenu.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/slicknav.min.css');?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/typography.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/default-css.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/responsive.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
    <!-- modernizr css -->
    <script src="<?php echo base_url('assets/assets/js/vendor/modernizr-2.8.3.min.js');?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form class="form-signin" action="<?php echo site_url('admin/login/auth');?>" method="post">
                    <div class="login-form-head">
                        <h4>Login Administrator</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="username" class="form-control" required autofocus>
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-password" name="password"  required>
                            <i class="ti-lock"></i>
                        </div>
                       <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Show Password</label>
                                </div>
                            </div>
                           
                        </div>
                        <br>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Masuk <i class="ti-arrow-right"></i></button>
                            <br>
                            <br>
                           
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url('assets/assets/js/vendor/jquery-2.2.4.min.js');?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url('assets/assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/js/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/js/metisMenu.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/js/jquery.slimscroll.min.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/js/jquery.slicknav.min.js');?>"></script>
    
    <!-- others plugins -->
    <script src="<?php echo base_url('assets/assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets/assets/js/scripts.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
    <!-- Show Password -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.custom-control-input').click(function(){
                if($(this).is(':checked')){
                    $('.form-password').attr('type','text');
                }else{
                    $('.form-password').attr('type','password');
                }
            })
        })
    </script>
    <!-- page script -->
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'top-right',
                    bgColor: '#FF4859'
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
                    text: "Pengguna Berhasil Login Anda Akan di alihkan ke dashboard",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'top-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Pengguna berhasil di update",
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
                    text: "Pengguna Berhasil dihapus.",
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
</body>

</html>