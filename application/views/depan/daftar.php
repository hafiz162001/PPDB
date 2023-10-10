<?php
    $this->load->view('depan/v_header');
?>
  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Daftar Santri</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Silahkan Isi Form  Yang Kami Sediakan</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->
<!-- Start download Area -->
<br>
<br>
  <section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <!-- <div class="row">
            <div class="col-md-8">
                <div class="contact-title">
                    <h2>Download</h2>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-12">
              
<div class="container">
    
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle" style="background-color:#ffc0cb">1</a>
            <p>Data  Siswa</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button"  class="btn btn-default btn-circle step-2 "style="background-color:#ffc0cb" >2</a>
            <p>Data Orang Tua / Wali</p>
        </div>
       
    </div>
</div>
<form action="<?php echo site_url('Daftar/simpan');?>" method="post">
    <div class="row setup-content" id="step-1">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="col-md-12">
           
                <h3>Informasi</h3>
                <div class="form-group">
                    <label class="control-label">No Peserta</label>
                    <input  maxlength="100" name="no_peserta" value="<?= $no_peserta;?>" type="text" required="required" class="form-control"readonly value="32020" />
                </div>
                <div class="form-group">
                    <label class="control-label">Informasi Pendaftaran</label><br>
                    <input type="radio" class="form-check-input" value="Santri" name="informasi" > Santri<br>
                    <input type="radio" class="form-check-input" value="Alumni" name="informasi" > Alumni<br>
                    <input type="radio" class="form-check-input" value="Wali Santri" name="informasi" > Wali Santri<br>
                    <input type="radio" class="form-check-input" value="Brosur" name="informasi" > Brosur<br>
                    <input type="radio" class="form-check-input" value="Media Cetak/Elektronik" name="informasi" > Media Cetak/Elektronik<br>
                    <input type="radio" class="form-check-input" value="lainya" name="informasi" > Lainya
                </div>
                <div>
                <b>*bila data tidak ada masukan tanda(-)</b>
                </div>

            <div class="single-blog-page sgl-daftar">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                <?php foreach ($populer->result() as $row) :?>
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                           <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="">
                        </a>
                    </div>
                    <div class="pst-content">
                      <p><strong><a style="color: #fff;" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo $row->tulisan_judul;?></a></strong></p>
                      
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
              <div class="single-blog-page plr-tags">
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
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="col-md-12">
              <h3>I. Identitas Calon</h3>
                <div class="form-group">
                    <label class="control-label">NISN</label>
                    <input  maxlength="100" name="nisn" type="text" required="required" class="form-control" placeholder="NISN"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Lengkap</label>
                    <input maxlength="100" name="nama_lengkap" type="text" required="required" class="form-control" placeholder="Nama Lengkap" />
                </div>
                <div class="form-group">
                    <label class="control-label">Tempat Lahir</label>
                    <input maxlength="100" name="tempat_lahir" type="text" required="required" class="form-control" placeholder="Tempat Lahir" />
                </div>
                <div class="form-group">
                    <label class="control-label">Tanggal Lahir</label>
                    <input maxlength="100"name="tanggal_lahir"id="tanggal_lahir" type="text" required="required" class="form-control" placeholder="Tanggal Lahir" />    
                </div>
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label> <br>
                        <input type="radio" class="form-check-input" value="Laki-Laki" name="jenis_kelamin" > Laki-Laki
                        <input type="radio" class="form-check-input" value="Perempuan" name="jenis_kelamin" > Perempuan
                    </div>
                <div class="form-group">
                    <label class="control-label">Anak ke</label>
                    <input maxlength="100" name="anak_ke" type="text" required="required" class="form-control" placeholder="2" />  <label class="control-label">Dari</label>
                    <input maxlength="100" name="dari" type="text" required="required" class="form-control" placeholder="3" />  <label class="control-label">Bersaudara</label>
                </div>
                <div class="form-group">
                    <label class="control-label">Jumlah Saudara</label>
                    <input maxlength="100" name="jumlah_saudara_kandung" type="text" required="required" class="form-control" placeholder="2" />  <label class="control-label">Kandung</label>
                    <input maxlength="100" name="jumlah_saudara_tiri" type="text" required="required" class="form-control" placeholder="0" />  <label class="control-label">Tiri</label>
                </div>
                <div class="form-group">
                    <label class="control-label">Suku</label>
                    <input maxlength="100" name="suku" type="text" required="required" class="form-control" placeholder="Suku" />
                </div>
                <div class="form-group">
                    <label class="control-label">Warga Negara</label> <br>
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
                <h3>Keterangan Kesehatan</h3>
                <div class="form-group">
                    <label class="control-label">Keterangan Kesehatan</label>
                    <input maxlength="100" name="penyakit" type="text" required="required" class="form-control" placeholder="Penyakit berat yang pernah di derita" />
                </div>
                <div class="form-group">
                    <label class="control-label">Berat Badan</label>
                    <input maxlength="100" name ="berat_badan" type="text" required="required" class="form-control" placeholder="Berat Badan" style="width:120px;" />kg
                </div>
                <div class="form-group">
                    <label class="control-label">Tinggi Badan</label>
                    <input maxlength="100" name="tinggi_badan" type="text" required="required" class="form-control" placeholder="Berat Badan" style="width:120px;"/>cm
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
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
         <center> <h3>II.Identitas Orang Tua / Wali</h3></center>
      

        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="col-md-12">
                <h4>a.Ayah</h4>
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
                         <option value="">Pilih</option>    
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
                    <input maxlength="100"id="input_lainya_ayah" name="pekerjaan_ayah" type="text"  class="form-control"  placeholder="Lainnya" />
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
            </div>
            <div>
                <b>*bila data tidak ada masukan tanda(-)</b>
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
                           <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="">
                        </a>
                    </div>
                    <div class="pst-content">
                      <p><strong><a style="color: #fff;" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo $row->tulisan_judul;?></a></strong></p>
                      
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
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="col-md-12">
                <h4>b.Ibu</h4>
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
                    <select  class="form-control" id="pilihkerjaan_ibu" name="nama_pekerjaan_ibu">
                        <option value="">Pilih</option>
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
                    <input maxlength="100"id="input_lainya_ibu" name="nama_pekerjaan_ibu" type="text"  class="form-control"  placeholder="Lainnya" />
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
        </div>
        
        <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="col-md-12">
                <h4>C.Wali</h4>
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
                         <option value="">Pilih</option>
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
                <button class="btn btn-success pull-right" id="btn-submit" type="submit">Simpan!</button>
            </div>
            <div>
                <b>*bila data tidak ada masukan tanda(-)</b>
                </div>
        </div>
        
     </div>
</form>
</div>
           
            </div>
          </div>
        </div>
    </section>
    <!--//END  ABOUT download -->

  <div class="clearfix"></div>
<?php
    $this->load->view('depan/footer');
?>
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
  <!-- DataTables -->
  <script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
  <script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>

  <!-- FastClick -->
  <script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>assets/bpn/contactform/contactform.js"></script>

  <script src="<?php echo base_url();?>assets/bpn/js/main.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
  <script>
  $(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allstep = $('.step-2'),
        btn_submit =$('#btn-submit');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
            $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-primary').addClass('btn-default');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function(){
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});
btn_submit.click(function(){
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});
// btn_submit.click(function(){
//     alert('Apakah Data Sudah Sesuai?')
// })

allstep.click(function(){
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for(var i=0; i<curInputs.length; i++){
        if (!curInputs[i].validity.valid){
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid)
        nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');



});
</script>
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
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Terimakasih Mohon Tunggu Admin Akan Menjawab Via No Hp",
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
                    text: "File berhasil di update",
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
                    text: "File Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>

</body>

</html>
