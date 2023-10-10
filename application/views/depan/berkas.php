<?php
    $this->load->view('depan/v_header');
?>

<!-- ======= Program Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <!-- <div class="layer2">
                  <h1 class="title2">PROGRAM UNGGULAN</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Ishlahulummah Tasikmalaya</h2>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6" style="margin-left: 300px;">
        <div class="box-header">
            <h1>Berkas Ishlahulummah Boarding School</h1>
        </div>
    </div>
    <!-- End Program Header -->

    <div class="program">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 bg-red">
                    <h1 style="margin-top: 25px;">Berkas</h1>
                <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                    <tr>
                        <th>No</th>
          				<th>Nama Berkas</th>
          				<th>Keterangan Berkas</th>
                        <th style="text-align:right;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=0;
                        foreach ($data->result_array() as $i) :
                        $no++;
                        $kode=$i['id_berkas'];
                        $nama_berkas=$i['nama_berkas'];
                        $keterangan_berkas=$i['keterangan_berkas'];
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $nama_berkas;?></td>
                        <td><?php echo $keterangan_berkas;?></td>
                        <td style="text-align:right;"><a href="<?php echo base_url('berkas/dwonload/');?><?php echo $kode;?>" class="btn"><span class="fa fa-download"></span></a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
              </table>
                </div>
                <div class="col-sm-4" style="margin-top: 90px;">
                    <a href="<?php echo base_url();?>sejarah"><h3>Sejarah</h3></a>
                    <hr>
                    <a href="<?php echo base_url();?>sejarah""><h3>Visi-Misi</h3></a>
                    <hr>
                    <a href="<?php echo base_url();?>guru"><h3>Guru</h3></a>
                    <hr>
                    <a href="<?php echo base_url();?>galeri"><h3>Gallery</h3></a>
                </div>
            </div>
        </div>
    </div>

    <?php
      $this->load->view('depan/footer');
    ?>

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