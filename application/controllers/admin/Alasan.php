<?php
class Alasan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_alasan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_alasan->get_all_alasan();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_alasan',$x);
	}
	
	function simpan_alasan(){
				$config['upload_path'] = './assets/images/alasan/'; //path folder
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
	                        $config['source_image']='./assets/images/alasan/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        // $config['width']= 300;
	                        // $config['height']= 300;
	                        $config['new_image']= './assets/images/alasan/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$this->m_alasan->simpan_alasan($gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/alasan');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/alasan');
	                }
	                 
	            }else{
	            	$nama=strip_tags($this->input->post('nama'));
					$deskripsi=strip_tags($this->input->post('deskripsi'));
					$this->m_client->simpan_client($nama,$deskripsi,$gambar);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/alasan');
				}
				
	}
	
	function update_alasan(){
				// print_r($_POST);
				// exit();
	            $config['upload_path'] = './assets/images/alasan/'; //path folder
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
	                        $config['source_image']='./assets/images/alasan/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        // $config['width']= 300;
	                        // $config['height']= 300;
	                        $config['new_image']= './assets/images/alasan/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/alasan/'.$gambar;
							unlink($path);

	                        $gambar=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$this->m_alasan->update_alasan($kode,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/alasan');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/alasan');
	                }
	                
	            }else{
					$kode=$this->input->post('kode');
					$nama=strip_tags($this->input->post('nama'));
					$deskripsi=strip_tags($this->input->post('deskripsi'));
					$jabatan=strip_tags($this->input->post('jabatan'));
					$this->m_client->update_client_tanpa_img($kode,$nama,$deskripsi,$jabatan);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/client');
	            } 

	}
				

	function hapus_alasan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/alasan/'.$gambar;
		unlink($path);
		$this->m_alasan->hapus_alasan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/alasan');
	}

}