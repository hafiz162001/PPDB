 <?php
    $this->load->view('depan/v_header');
?>
  <div id="galery" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="awesome-project-content wow slideInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                <div class="col-md-4 col-sm-4 col-xs-12 design <?php echo $id;?>">
                    <div class="single-awesome-project">
                    <div class="awesome-img">
                        <a href="#"><img src="<?php echo base_url().'assets/images/galery/'.$image;?>" alt="" /></a>
                        <div class="add-actions text-center">
                        <div class="project-dec">
                            <a class="venobox" data-gall="myGallery" href="<?php echo base_url().'assets/images/galery/'.$image;?>">
                            <h4><?php echo $title;?></h4>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
  </div>

<?php     
    $this->load->view('depan/footer');
?>