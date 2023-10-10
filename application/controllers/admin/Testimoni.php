<?php
class Testimoni extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_testimoni');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_testimoni->get_all_testimoni();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_testimoni',$x);
	}
	
	function simpan_testimoni(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$nama=strip_tags($this->input->post('nama'));
							$isi=strip_tags($this->input->post('isi'));
							$email=strip_tags($this->input->post('email'));
							$this->m_testimoni->simpan_testi($nama,$isi,$email,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/testimoni');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/testimoni');
	                }
	                 
	            }else{
	            	$nama=strip_tags($this->input->post('nama'));
					$isi=strip_tags($this->input->post('isi'));
					$email=strip_tags($this->input->post('email'));
					$this->m_testimoni->simpan_testi($nama,$isi,$email);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/testimoni');
				}
				
	}
	
	function update_testimoni(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $gambar=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nama=strip_tags($this->input->post('nama'));
							$isi=strip_tags($this->input->post('isi'));
							$email=strip_tags($this->input->post('email'));
							$this->m_testimoni->update_testi($kode,$nama,$isi,$email,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/testimoni');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/testimoni');
	                }
	                
	            }else{
					$kode=$this->input->post('kode');
					$nama=strip_tags($this->input->post('nama'));
					$isi=strip_tags($this->input->post('isi'));
					$email=strip_tags($this->input->post('email'));
					$this->m_testimoni->update_testi_tanpa_img($kode,$nama,$isi,$email);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/testimoni');
	            } 

	}

	function hapus_testi(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_testimoni->hapus_testi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/testimoni');
	}

}