<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
    $title=$title->row_array();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title['identitas_nama'];?> | Detail</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/bpn/img/load.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/all.css'?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.css'?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/select2/select2.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">


</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('admin/v_header');
  ?>
  
 <!-- sidebar menu: : style can be found in sidebar.less -->
 <?php
    $this->load->view('admin/menu');
  ?>
  <!-- /.sidebar -->
	<?php
        $b=$data->row_array();
        $wali=$wali->row_array();
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $b['nama_peserta'];?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pendaftar</a></li>
        <li class="active">Detail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <form action="<?php echo base_url().'admin/tulisan/update_tulisan'?>" method="post" enctype="multipart/form-data">
    <div class="box box-default">
        <div class="box-header with-border">
          <div class="box-header">
            
          <a href="<?php echo base_url('admin/pendaftar');?>" class="btn btn-success btn-flat"><span class="fa fa-back"></span> Kembali</a>
            <a href="<?php echo base_url('admin/Pendaftar/print'.'/'.$this->uri->segment(4).'/'.$this->uri->segment(5));?>" class="btn btn-success btn-flat"><span class="fa fa-print"></span> Cetak</a>
               
            </div>
        </div>
	
        <!-- /.box-header -->
        <div class="box-body">

      </div>
	  </div>
      <!-- /.box -->
      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <div class="box-body">
            <input type="hidden" name="kode" value="<?php echo $b['id_peserta'];?>">
            <div class="form-group">
                <label for="">No.Peserta</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['no_peserta'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Informasi Pendaftaran</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['info_pendaftaran'];?>"readonly required/>
              </div>

              <div class="form-group">
                <label for="">Nisn</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['nisn'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['nama_peserta'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['tempat_lahir'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['tanggal_lahir'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['jenis_kelamin'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Anak Ke </label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['anak_ke'];?> dari <?= $b['dari_anak_ke'];?> saudara" readonly required/>
              </div>
              <div class="form-group">
                <label for="">Suku</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['suku'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Warga Negara</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['warga_negara'];?>" readonly required/>
              </div>
              <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['alamat_rumah'];?> - Rt/Rw <?php echo $b['rt'];?> / <?php echo $b['rw'];?> - <?php echo $b['kelurahan'];?> - <?php echo $b['kecamatan'];?> - <?php echo $b['kabupaten'];?> - <?php echo $b['provinsi'];?>  " readonly required/>
              </div>
              <div class="form-group">
                <label for="">Penyakit Pernah Diderita</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['keterangan_sehat'];?>" readonly required/>
              </div>
              <div class="form-group">
                <label for="">Tinggi Badan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['tb'];?> Cm" readonly required/>
              </div>
              <div class="form-group">
                <label for="">Berat Badan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['bb'];?> Kg" readonly required/>
              </div>
              <div class="form-group">
                <label for="">Prestasi Akademik</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['prestasi_1'];?>" readonly required/><br>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['prestasi_2'];?>" readonly required/><br>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['prestasi_2'];?>" readonly required/>
              </div>
              <div class="form-group">
                <label for="">Asal Sekolah</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['asal_sekolah'];?> " readonly required/>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Identitas Orang Tua</h3>
            </div>
            <div class="box-body">
            <div class="form-group">
                <label for="">Nama Ayah</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['nama_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Status Ayah</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['status_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Suku</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['suku_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Warga_negara</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['warga_negara_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['alamat_rumah_ayah'];?> - Rt/Rw <?php echo $b['rt_ayah'];?> / <?php echo $b['rw_ayah'];?> - <?php echo $b['kelurahan_ayah'];?> - <?php echo $b['kecamatan_ayah'];?> - <?php echo $b['kabupaten_ayah'];?> - <?php echo $b['provinsi_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Nomor Handphone</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['no_telepon_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Pendidikan Terakhir</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['pendidikan_ayah'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Pekerjaan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" 
                value="<?php echo ($b['status_kerja_ayah'] == '1') ? ($b['pekerjaan_ayah']) : 'Tidak Bekerja'?>
                "readonly required/>
              </div>
              <div class="form-group">
                <label for="">Penghasilan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" 
                value="<?php echo ($b['status_kerja_ayah'] == '1') ? ($b['penghasilan_ayah']) : 'Tidak Bekerja'?>
                "readonly required/>
              </div>
              <div class="form-group">
                <label for="">Nama Ibu</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['nama_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Status ibu</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['status_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Suku</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['suku_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Warga_negara</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['warga_negara_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['alamat_rumah_ibu'];?> - Rt/Rw <?php echo $b['rt_ibu'];?> / <?php echo $b['rw_ibu'];?> - <?php echo $b['kelurahan_ibu'];?> - <?php echo $b['kecamatan_ibu'];?> - <?php echo $b['kabupaten_ibu'];?> - <?php echo $b['provinsi_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Nomor Handphone</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['no_telepon_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Pendidikan Terakhir</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $b['pendidikan_ibu'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Pekerjaan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" 
                value="<?php echo ($b['status_kerja_ibu'] == '1') ? ($b['pekerjaan_ibu']) : 'Tidak Bekerja'?>
                "readonly required/>
              </div>
              <div class="form-group">
                <label for="">Penghasilan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" 
                value="<?php echo ($b['status_kerja_ibu'] == '1') ? ($b['penghasilan_ibu']) : 'Tidak Bekerja'?>
                "readonly required/>
              </div>
             
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    <?php if($wali != []) :?>
      <div class="row">
        <div class="col-md-6">

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Wali</h3>
            </div>
            <div class="box-body">
            
              <div class="form-group">
                <label for="">Nama Wali</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['nama_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Status Ayah</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['status_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Suku</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['suku_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Warga_negara</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['warga_negara_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['alamat_rumah_wali'];?> - Rt/Rw <?php echo $wali['rt_wali'];?> / <?php echo $wali['rw_wali'];?> - <?php echo $wali['kelurahan_wali'];?> - <?php echo $wali['kecamatan_wali'];?> - <?php echo $wali['kabupaten_wali'];?> - <?php echo $wali['provinsi_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Nomor Handphone</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['no_telepon_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Pendidikan Terakhir</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" value="<?php echo $wali['pendidikan_wali'];?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Pekerjaan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" 
                value="<?php echo ($wali['status_kerja_wali'] == '1') ? ($wali['pekerjaan_wali']) : 'Tidak Bekerja'?>
                "readonly required/>
              </div>
              <div class="form-group">
                <label for="">Penghasilan</label>
                <input type="text" name="xnomer_peserta" class="form-control" placeholder="" 
                value="<?php echo ($wali['status_kerja_wali'] == '1') ? ($wali['penghasilan_wali']) : 'Tidak Bekerja'?>
                "readonly required/>
              </div>
              
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

		    </form>

          <!-- /.box -->
        </div>
        
        <!-- /.col (right) -->
      </div>
      <?php endif;?>
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 3.0
    </div>
    <strong>Copyright &copy; <?php echo 2019;?> - <?php echo date('Y');?> <a href="#"><?php echo $title['identitas_nama'];?></a></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js'?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.date.extensions.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.extensions.js'?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.js'?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<!-- Page script -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('ckeditor');


  });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

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
