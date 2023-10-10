<?php
class Seting extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_identitas');
		$this->load->library('upload');
	}


	public function index(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_identitas->get_pengguna_login($kode);
		$x['data']=$this->m_identitas->get_all_pengguna();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/set_web',$x);
	}

	public function simpan_identiitas(){
	
				$config['upload_path'] = './assets/home/logo/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|ico'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/home/logo/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
							$config['width']= 10;
	                        $config['height']= 10;
	                        $config['new_image']= './assets/home/logo/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$nama=$this->input->post('xnama');
			                $email=$this->input->post('xemail');
			                $alamat=$this->input->post('xalamat');
			                $map=$this->input->post('xmap');
							$youtube=strip_tags(str_replace("https://youtu.be/", "", $this->input->post('xyoutube')));
		                    $telp=$this->input->post('xtelp');
		                    $fb=$this->input->post('xfb');
		                    $twit=$this->input->post('xtwit');
		                    $ig=$this->input->post('xig');
		                    $apk=$this->input->post('xapk');
			               	$this->m_identitas->simpan_identiitas($nama,$email,$alamat,$map,$youtube,$telp,$fb,$twit,$ig,$apk,$gambar);
			                echo $this->session->set_flashdata('msg','success');
			                redirect('admin/seting');
					}else{
							
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/seting');
	                }
	                 
	            }else{
							$nama=$this->input->post('xnama');
			                $email=$this->input->post('xemail');
			                $alamat=$this->input->post('xalamat');
			                $map=$this->input->post('xmap');
		                    $youtube=strip_tags(str_replace("https://youtu.be/", "", $this->input->post('xyoutube')));
		                    $telp=$this->input->post('xtelp');
		                    $fb=$this->input->post('xfb');
		                    $twit=$this->input->post('xtwit');
		                    $ig=$this->input->post('xig');
		                    $apk=$this->input->post('xapk');
			               	$this->m_identitas->simpan_identiitas_tanpa_img($nama,$email,$alamat,$map,$youtube,$telp,$fb,$twit,$ig,$apk);
							   echo $this->session->set_flashdata('msg','warning');
					redirect('admin/seting');
				}
	            	
	            }

	public function tentang_kami(){
		$kode=$this->session->userdata('idadmin');
		$x['user']=$this->m_identitas->get_pengguna_login($kode);
		$x['data']=$this->m_identitas->get_all_pengguna();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_tentang_kami',$x);
	}

	public function edit_tentang(){
				
	          
	            
	                        $judul=$this->input->post('xjudul');
							$tentang=$this->input->post('xtentang');
			               	$this->m_identitas->simpan_tentang($tentang,$image,$judul);
			                echo $this->session->set_flashdata('msg','success');
			                redirect('admin/seting/tentang_kami');
	            	
	    }

}