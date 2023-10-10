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
  <title><?php echo $title['identitas_nama'];?> | Add Post</title>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Pendaftaran
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pendaftaran</a></li>
        <li class="active">Add Pendaftaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Pendaftar</h3>
        </div>

		<form action="<?php echo base_url().'Daftar/simpan_pendaftar'?>" method="post" enctype="multipart/form-data">

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
            <button type="submit" class="btn btn-primary btn-flat"><span class="fa fa-save"></span> Simpan</button>
            </div>
            <!-- /.col -->
            <div class="col-md-2">
              <div class="form-group">
                
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->

      </div>
	  </div>
      <!-- /.box -->

      <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
              <b>*bila data tidak ada masukan tanda(-)</b>
            </div>
            <div class="box-body">
         
            <div class="form-group">
                <label for="">No.Peserta</label>
                <input type="text" name="no_peserta" class="form-control" placeholder="" value="<?= $no_peserta;?>"readonly required/>
              </div>
              <div class="form-group">
                <label for="">Informasi Pendaftaran</label><br>
                <input type="radio" class="form-check-input" value="Santri" name="informasi" > Santri<br>
                    <input type="radio" class="form-check-input" value="Alumni" name="informasi" > Alumni<br>
                    <input type="radio" class="form-check-input" value="Wali Santri" name="informasi" > Wali Santri<br>
                    <input type="radio" class="form-check-input" value="Brosur" name="informasi" > Brosur<br>
                    <input type="radio" class="form-check-input" value="Media Cetak/Elektronik" name="informasi" > Media Cetak/Elektronik<br>
                    <input type="radio" class="form-check-input" value="lainya" name="informasi" > Lainya
              </div>

              <div class="form-group">
                <label for="">Nisn</label>
                <input type="text" name="nisn" class="form-control" placeholder="nisn" required/>
              </div>
              <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama lengkap" required/>
              </div>
              <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat_lahir" required/>
              </div>
              <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input maxlength="100"name="tanggal_lahir"id="tanggal_lahir" type="text" required="required" class="form-control" placeholder="Tanggal Lahir" />    
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <label class="control-label">Jenis Kelamin</label> <br>
                        <input type="radio" class="form-check-input" value="Laki-Laki" name="jenis_kelamin" > Laki-Laki
                        <input type="radio" class="form-check-input" value="Perempuan" name="jenis_kelamin" > Perempuan
              </div>
              <div class="form-group">
                <label for="">Anak Ke </label>
                <input maxlength="100" name="anak_ke" type="text" required="required" class="form-control" placeholder="2" />  <label class="control-label">Dari</label>
                    <input maxlength="100" name="dari" type="text" required="required" class="form-control" placeholder="3" />  <label class="control-label">Bersaudara</label>
              </div>
              <div class="form-group">
                    <label class="control-label">Jumlah Saudara</label>
                    <input maxlength="100" name="jumlah_saudara_kandung" type="text" required="required" class="form-control" placeholder="2" />  <label class="control-label">Kandung</label>
                    <input maxlength="100" name="jumlah_saudara_tiri" type="text" required="required" class="form-control" placeholder="0" />  <label class="control-label">Tiri</label>
                </div>
              <div class="form-group">
                <label for="">Suku</label>
                <input maxlength="100" name="suku" type="text" required="required" class="form-control" placeholder="Suku" />
              </div>
              
              <div class="form-group">
                <label for="">Warga Negara</label><br>
                <input type="radio" class="form-check-input" value="WNI" name="warga_negara" > WNI
                    <input type="radio" class="form-check-input" value="WNA" name="warga_negara" > WNA
              </div>
              <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <input maxlength="100"id="alamat" name="alamat" type="text" required="required" class="form-control" placeholder="jln.Juanda" />
                </div>
                <div class="form-group">
                    <label class="control-label">RT</label>
                    <input maxlength="100" id="rt" name="rt" type="text" required="required" class="form-control" placeholder="RT" style="width:50px;" />
                </div>
                <div class="form-group">
                    <label class="control-label">RW</label>
                    <input maxlength="100" id="rw" name="rw" type="text" required="required" class="form-control" placeholder="RW" style="width:50px;" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kode Pos</label>
                    <input maxlength="100" name="kode_pos" type="text" required="required" class="form-control" placeholder="Kode Pos" style="width:80px;" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kelurahan</label>
                    <input maxlength="100" name="kelurahan" type="text" required="required" class="form-control" placeholder="keluarahan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kecamatan</label>
                    <input maxlength="100" name="kecamatan" type="text" required="required" class="form-control" placeholder="Kecamatan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kabupaten / Kota</label>
                    <input maxlength="100" name="kabupaten" type="text" required="required" class="form-control" placeholder="Kabupaten / Kota" />
                </div>
                <div class="form-group">
                    <label class="control-label">Provinsi</label>
                    <input maxlength="100" name="provinsi" type="text" required="required" class="form-control" placeholder="Provinsi" />
                </div>
                <div class="form-group">
                    <label class="control-label">Keterangan Kesehatan</label>
                   
                </div>
                
                <div class="form-group">
                    <label class="control-label">Keterangan Kesehatan</label>
                    <input maxlength="100" name="penyakit" type="text" required="required" class="form-control" placeholder="Penyakit berat yang pernah di derita" />
                </div>
                <div class="form-group">
                    <label class="control-label">Berat Badan</label>
                    <input maxlength="100" name ="berat_badan" type="number" required="required" class="form-control" placeholder="Berat Badan" style="width:120px;" />kg
                </div>
                <div class="form-group">
                    <label class="control-label">Tinggi Badan</label>
                    <input maxlength="100" name="tinggi_badan" type="number" required="required" class="form-control" placeholder="Berat Badan" style="width:120px;"/>cm
                </div>
                <div class="form-group">
                    <label class="control-label">Prestasik Akademik /Olahraga</label>
                    <input maxlength="100" name="prestasi_1" type="text" required="required" class="form-control" placeholder="Prestasi 1" /><br>
                    <input maxlength="100" name="prestasi_2" type="text" required="required" class="form-control" placeholder="Prestasi 2" /><br>
                    <input maxlength="100"  name="prestasi_3" type="text" required="required" class="form-control" placeholder="Prestasi 3" /><br>
                </div>
                <div class="form-group">
                    <label class="control-label">Asal Sekolah</label>
                    <input maxlength="100" name="asal_sekolah" type="text" required="required" class="form-control" placeholder="Asal Sekolah" />
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
              <b>*bila data tidak ada masukan tanda(-)</b>
            </div>
            <div class="box-body">
            <div class="form-group" >
                    <label class="control-label">*Ayah</label>
                    
                </div>
            <div class="form-group">
                    <label class="control-label">Nama Ayah</label>
                    <input  maxlength="100" name="nama_ayah" type="text" required="required" class="form-control" placeholder="Nama Ayah"  />
                </div>
                
               
                <div class="form-group">
                    <label class="control-label">Status</label> <br>
                    <input type="radio" class="form-check-input" name="status_ayah" value="Masih Hidup" > Masih Hidup
                    <input type="radio" class="form-check-input" name="status_ayah" value="Sudah Meninggal"> Sudah Meninggal Dunia  
                </div>
               
                <div class="form-group">
                    <label class="control-label">Agama Ayah</label>
                    
                    <select  class="form-control" name="agama_ayah" required="required">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha" >Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                
                </div>
                <div class="form-group">
                    <label class="control-label">Suku</label>
                    <input maxlength="100" name="suku_ayah" type="text" required="required" class="form-control" placeholder="Suku Ayah" />
                </div>
                <div class="form-group">
                    <label class="control-label">Warga Negara</label> <br>
                    <input type="radio" class="form-check-input" value="WNI" name="warga_negara_ayah" > WNI
                    <input type="radio" class="form-check-input" value="WNA" name="warga_negara_ayah" > WNA
                </div>
                <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <input maxlength="100" id="alamat" name="alamat_ayah" type="text" required="required" class="form-control"  placeholder="Jln.Juanda" />
                </div>
                <div class="form-group">
                    <label class="control-label">RT</label>
                    <input maxlength="100" id="rt2" name="rt_ayah" type="text" required="required" placeholder="Rt" class="form-control" style="width:50px;"  />
                </div>
                <div class="form-group">
                    <label class="control-label">RW</label>
                    <input maxlength="100" id="rw2" name="rw_ayah" type="text" required="required"  placeholder="Rw" class="form-control" style="width:50px;"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Kode Pos</label>
                    <input maxlength="100" name="kode_pos_ayah" type="text" class="form-control" style="width:90px;" placeholder="Kode Pos"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Kelurahan</label>
                    <input maxlength="100" name="kelurahan_ayah" type="text" required="required" class="form-control" placeholder="Kelurahan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kecamatan</label>
                    <input maxlength="100" name="kecamatan_ayah" type="text" required="required" class="form-control" placeholder="Kecamatan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kabupaten/Kota</label>
                    <input maxlength="100" name="kabupaten_ayah" type="text" required="required" class="form-control" placeholder="Kabupaten/Kota" />
                </div>
                <div class="form-group">
                    <label class="control-label">Provinsi</label>
                    <input maxlength="100" name="provinsi_ayah" type="text" required="required" class="form-control"  placeholder="Kabupaten/Kota" />
                </div>
                <div class="form-group">
                    <label class="control-label"></label>No Hp
                    <input maxlength="13" name="no_hp_ayah" type="number" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label"></label>Pendidikan Terakhir
                    <select  class="form-control" name="pendidikan_ayah">
                        <option value="SD/MI/Sederajat">SD/MI/Sederajat</option>
                        <option value="SD/MTS/Sederajat">SD/MTS/Sederajat</option>
                        <option value="SMA/Sederajat" >SMA/Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label"></label>Status Kerja
            
                    <select  class="form-control" id="pekerjaan_ayah" name="status_kerja_ayah">
                        <option value="1">Bekerja </option>
                        <option value="2">Tidak Bekerja</option>
                    </select>
                </div>
                <div class="form-group"id="pekerjaan_ayah2">
                    <label class="control-label"></label>Pekerjaan
            
                    <select  class="form-control"id="pilihkerjaan_ayah"  name="pekerjaan_ayah">
                       <option>Pilih</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                        <option value="PNS">PNS</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pengusaha">Pengusaha</option>
                        <option value="Honorer">Honorer</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Lainya_ayah">Lainya</option>
                     
                    </select>
                </div>
                <div class="form-group" id="Lainya">
                    <label class="control-label">Pekerjaan Lainya</label>
                    <input maxlength="100" id="input_lainya_ayah" name="pekerjaan_ayah" type="text"  class="form-control"  placeholder="Lainnya" />
                </div>
                <div class="form-group" id="penghasilan">
                    <label class="control-label"></label>Penghasilan Perbulan
                    <select  class="form-control" name="penghasilan_ayah">
                        <option value="1.000.000">1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                        <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                        <option value="&ge;5.000.000">&ge;5.000.000</option>
                        
                     
                    </select>
                </div> 
                <div class="form-group" >
                    <label class="control-label">*Ibu</label>
                    
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Ibu</label>
                    <input  maxlength="100" name="nama_ibu" type="text" required="required" class="form-control" placeholder="Nama Ibu"  />
                </div>
                
               
                <div class="form-group">
                    <label class="control-label">Status</label> <br>
                    <input type="radio" class="form-check-input" name="status_ibu" value="Masih Hidup" > Masih Hidup
                    <input type="radio" class="form-check-input" name="status_ibu" value="Sudah Meninggal"> Sudah Meninggal Dunia  
                </div>
               
                <div class="form-group">
                    <label class="control-label">Agama Ibu</label>
                    <select  class="form-control" name="agama_ibu" required="required">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha" >Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Suku</label>
                    <input maxlength="100" name="suku_ibu" type="text" required="required" class="form-control" placeholder="Suku Ibu" />
                </div>
                <div class="form-group">
                    <label class="control-label">Warga Negara</label> <br>
                    <input type="radio" class="form-check-input" value="WNI" name="warga_negara_ibu" > WNI
                    <input type="radio" class="form-check-input" value="WNA" name="warga_negara_ibu" > WNA
                </div>
                <div class="form-group">
                
                    <label class="control-label">Alamat</label>
                    <input maxlength="100" id="alamat" name="alamat_ibu" type="text" required="required" class="form-control"  placeholder="Jln.Juanda" />
                </div>
                <div class="form-group">
                    <label class="control-label">RT</label>
                    <input maxlength="100" id="rt2" name="rt_ibu" type="text" required="required" class="form-control" style="width:50px;" placeholder="Rt" />
                </div>
                <div class="form-group">
                    <label class="control-label">RW</label>
                    <input maxlength="100" id="rw2" name="rw_ibu" type="text" required="required" class="form-control"style="width:50px;"  placeholder="Rw"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Kode Pos</label>
                    <input maxlength="100" name="kode_pos_ibu" type="text"  class="form-control" style="width:90px;"  placeholder="Kode Pos" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kelurahan</label>
                    <input maxlength="100" name="kelurahan_ibu" type="text" required="required" class="form-control" placeholder="Kelurahan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kecamatan</label>
                    <input maxlength="100" name="kecamatan_ibu" type="text" required="required" class="form-control" placeholder="Kecamatan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kabupaten /Kota</label>
                    <input maxlength="100" name="kabupaten_ibu" type="text" required="required" class="form-control" placeholder="Kabupaten/Kota" />
                </div>
                <div class="form-group">
                    <label class="control-label">Provinsi</label>
                    <input maxlength="100" name="provinsi_ibu" type="text" required="required" class="form-control" placeholder="Provinsi" />
                </div>
                <div class="form-group">
                    <label class="control-label"></label>No Hp
                    <input maxlength="13" name="no_hp_ibu" type="number" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label"></label>Pendidikan Terakhir
                    <select  class="form-control" name="pendidikan_ibu">
                        <option value="SD/MI/Sederajat">SD/MI/Sederajat</option>
                        <option value="SD/MTS/Sederajat">SD/MTS/Sederajat</option>
                        <option value="SMA/Sederajat" >SMA/Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label"></label>Status Kerja
            
                    <select  class="form-control" id="pekerjaan_ibu"name="status_kerja_ibu">
                        <option value="1">Bekerja </option>
                        <option value="2">Tidak Bekerja</option>
                    </select>
                </div>
                <div class="form-group" id="pekerjaan_ibu2">
                    <label class="control-label"></label>Pekerjaan
                    <select  class="form-control"required="required" id="pilihkerjaan_ibu" name="nama_pekerjaan_ibu">
                      <option value="Pilih">Pilih</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                        <option value="PNS">PNS</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pengusaha">Pengusaha</option>
                        <option value="Honorer">Honorer</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Lainya_ibu">Lainya</option>
                     
                    </select>
                </div>
                <div class="form-group" id="Lainya_ibu">
                    <label class="control-label">Pekerjaan Lainya</label>
                    <input maxlength="100" id="input_lainya_ibu"name="nama_pekerjaan_ibu" type="text"  class="form-control"  placeholder="Lainnya" />
                </div>
                <div class="form-group"id="penghasilan_ibu">
                    <label class="control-label"></label>Penghasilan Perbulan
                    <select  class="form-control" name="penghasilan_ibu">
                        <option value="1.000.000">1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                        <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                        <option value="&ge;5.000.000">&ge; 5.000.000</option>
                        
                     
                    </select>
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

      <div class="row">
      <div class="col-md-6">
          
          <!-- /.box -->

		 

          <!-- /.box -->
        </div>
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Wali</h3>
              <b>*bila data tidak ada masukan tanda(-)</b>
            </div>
            <div class="box-body">
            
            <div class="form-group">
                    <label class="control-label">Nama Wali</label>
                    <input  maxlength="100" name="nama_wali" type="text"  class="form-control" placeholder="Nama Wali"  />
                </div>
                
               
                <div class="form-group">
                    <label class="control-label">Status</label> <br>
                    <input type="radio" class="form-check-input" name="status_wali" value="Masih Hidup" > Masih Hidup
                    <input type="radio" class="form-check-input" name="status_wali" value="Sudah Meninggal"> Sudah Meninggal Dunia  
                </div>
               
                <div class="form-group">
                    <label class="control-label">Agama Wali</label>
                    <select  class="form-control" name="agama_wali" required="required">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha" >Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Suku</label>
                    <input maxlength="100" name="suku_wali" type="text"  class="form-control" placeholder="Suku wali" />
                </div>
                <div class="form-group">
                    <label class="control-label">Warga Negara</label> <br>
                    <input type="radio" class="form-check-input" value="WNI" name="warga_negara_wali" > WNI
                    <input type="radio" class="form-check-input" value="WNA" name="warga_negara_wali" > WNA
                </div>
                <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <input maxlength="100"  name="alamat_wali" type="text"  class="form-control"  placeholder="Jln.Juanda" />
                </div>
                <div class="form-group">
                    <label class="control-label">RT</label>
                    <input maxlength="100" id="rt2" name="rt_wali" type="text"  placeholder="Rt" class="form-control" style="width:50px;"  />
                </div>
                <div class="form-group">
                    <label class="control-label">RW</label>
                    <input maxlength="100" id="rw2" name="rw_wali" type="text"   placeholder="Rw" class="form-control" style="width:50px;"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Kode Pos</label>
                    <input maxlength="100" name="kode_pos_wali" type="text" class="form-control" style="width:90px;" placeholder="Kode Pos"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Kelurahan</label>
                    <input maxlength="100" name="kelurahan_wali" type="text" class="form-control" placeholder="Kelurahan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kecamatan</label>
                    <input maxlength="100" name="kecamatan_wali" type="text"  class="form-control" placeholder="Kecamatan" />
                </div>
                <div class="form-group">
                    <label class="control-label">Kabupaten/Kota</label>
                    <input maxlength="100" name="kabupaten_wali" type="text"  class="form-control" placeholder="Kabupaten/Kota" />
                </div>
                <div class="form-group">
                    <label class="control-label">Provinsi</label>
                    <input maxlength="100" name="provinsi_wali" type="text"  class="form-control"  placeholder="Kabupaten/Kota" />
                </div>
                <div class="form-group">
                    <label class="control-label"></label>No Hp
                    <input maxlength="13" name="no_hp_wali" type="number"  class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label"></label>Pendidikan Terakhir
                    <select  class="form-control" name="pendidikan_wali">
                        <option value="SD/MI/Sederajat">SD/MI/Sederajat</option>
                        <option value="SD/MTS/Sederajat">SD/MTS/Sederajat</option>
                        <option value="SMA/Sederajat" >SMA/Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label"></label>Status Kerja
            
                    <select  class="form-control" id="pekerjaan_wali" name="status_kerja_wali">
                        <option value="1">Bekerja </option>
                        <option value="2">Tidak Bekerja</option>
                    </select>
                </div>
                <div class="form-group"id="pekerjaan_wali2">
                    <label class="control-label"></label>Pekerjaan
            
                    <select  class="form-control"id="pilihkerjaan_wali"  name="pekerjaan_wali">
                       <option value="Pilih">Pilih</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                        <option value="PNS">PNS</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pengusaha">Pengusaha</option>
                        <option value="Honorer">Honorer</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Lainya_wali">Lainya</option>
                     
                    </select>
                </div>
                <div class="form-group" id="Lainya_wali">
                    <label class="control-label">Pekerjaan Lainya</label>
                    <input maxlength="100" id="input_lainya_wali" name="pekerjaan_wali" type="text"  class="form-control"  placeholder="Lainnya" />
                </div>
                <div class="form-group" id="penghasilan_wali">
                    <label class="control-label"></label>Penghasilan Perbulan
                    <select  class="form-control" name="penghasilan_wali">
                        <option value="1.000.000">1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="2.000.000 - 3.000.000">2.000.000 - 3.000.000</option>
                        <option value="3.000.000 - 5.000.000">3.000.000 - 5.000.000</option>
                        <option value="&ge;5.000.000">&ge;5.000.000</option>
                        
                     
                    </select>
                </div> 
              
              
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col (left) -->
        
        
        <!-- /.col (right) -->
      </div>
      </form>
   
      <!-- /.row -->

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
$(document).ready(function () {
    
let elTangallahir = $('#tanggal_lahir');
elTangallahir.datepicker({
    format: 'dd-mm-yyyy',
    clearBtn: false,
    autoclose: true,
    todayHighlight: true,
    readonly: false
});
$('#pekerjaan_ayah').on('change', function (e) {
            let optionSelected = $("option:selected", this);
                let valueSelected = this.value;
                
                if(valueSelected == 2){
                    $('#pekerjaan_ayah2').hide();
                    $('#penghasilan').hide();
                   
                    $("#Lainya").hide();
                }else{
                    $('#pekerjaan_ayah2').show();
                    $('#penghasilan').show();
                }
            });
            //ibu
            $('#pekerjaan_ibu').on('change', function (e) {
            var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                if(valueSelected == 2){
                    $('#pekerjaan_ibu2').hide();
                    $('#penghasilan_ibu').hide();
                    $("#Lainya_ibu").hide();
                   
                }else{
                    $('#pekerjaan_ibu2').show();
                    $('#penghasilan_ibu').show();
                }
            });
            
            //wali
            $('#pekerjaan_wali').on('change', function (e) {
            let optionSelected = $("option:selected", this);
                let valueSelected = this.value;
                
                if(valueSelected == 2){
                    $('#pekerjaan_wali2').hide();
                    $('#penghasilan_wali').hide();
                    $("#Lainya_wali").hide();
                }else{
                    $('#pekerjaan_wali2').show();
                    $('#penghasilan_wali').show();
                }
            });

            //lainya ayah
            $("#Lainya").hide();
            $('#pilihkerjaan_ayah').on('change', function (e) {
            var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                if(valueSelected == "Lainya_ayah"){
                    $("#Lainya").show();
                }else{
                    $("#Lainya").hide();
                }
            });

            //get value ayah kerja
            $('#pilihkerjaan_ayah').on('change', function (e) {
            
            var optionSelected = $("option:selected", this);
                var nilaiselect = this.value;
             var tesayah = $("#input_lainya_ayah").val();
             if(nilaiselect !== 'Lainya_ayah'){
                 if(nilaiselect === "Lainya_ayah"){
                    $("#input_lainya_ayah").val('');
                 }
                $("#input_lainya_ayah").val(nilaiselect);
             }
            });



            //Lainya Ibu
            $("#Lainya_ibu").hide();
            $('#pilihkerjaan_ibu').on('change', function (e) {
            var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                if(valueSelected == "Lainya_ibu"){
                    $("#Lainya_ibu").show();
                }else{
                    $("#Lainya_ibu").hide();
                }
            });

             //get value wali kerja
             $('#pilihkerjaan_ibu').on('change', function (e) {
            
            var optionSelected = $("option:selected", this);
                var nilaiselect = this.value;
             var tesayah = $("#input_lainya_ibu").val();
             if(nilaiselect !== 'Lainya_ibu'){
                 if(nilaiselect === "Lainya_ibu"){
                    $("#input_lainya_ibu").val('');
                 }
                $("#input_lainya_ibu").val(nilaiselect);
             }
            });
             //lainya wali
             $("#Lainya_wali").hide();
            $('#pilihkerjaan_wali').on('change', function (e) {
            var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                
                if(valueSelected == "Lainya_wali"){
                    $("#Lainya_wali").show();
                }else{
                    $("#Lainya_wali").hide();
                }
            });

             //get value wali kerja
             $('#pilihkerjaan_wali').on('change', function (e) {
            
            var optionSelected = $("option:selected", this);
                var nilaiselect = this.value;
             var tesayah = $("#input_lainya_wali").val();
             if(nilaiselect !== 'Lainya_wali'){
                 if(nilaiselect === "Lainya_wali"){
                    $("#input_lainya_wali").val('');
                 }
                $("#input_lainya_wali").val(nilaiselect);
             }
            });

    });
</script>

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

    //

   

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
