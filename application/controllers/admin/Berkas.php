<?php
class Berkas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_berkas');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_berkas->get_all_berkas();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_berkas',$x);
	}
	
	function simpan_berkas(){
				$config['upload_path'] = './assets/berkas/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/berkas/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/berkas/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $nama_berkas=$gbr['file_name'];
							$keterangan_berkas=strip_tags($this->input->post('xketerangan'));
							$this->m_berkas->simpan_berkas($nama_berkas,$keterangan_berkas);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/berkas');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/berkas');
	                }
		}
	}
	
	function update_berkas(){
				
	            $config['upload_path'] = './assets/berkas/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/berkas/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/berkas/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $berkas=$this->input->post('berkas');
							$path='./assets/berkas/'.$berkas;
							unlink($path);

							$kode=$this->input->post('kode');
							$nama_berkas=$gbr['file_name'];
							$keterangan_berkas=strip_tags($this->input->post('xketerangan'));
							$this->m_berkas->update_berkas($kode,$nama_berkas,$keterangan_berkas);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/berkas');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/berkas');
	                }
				}
	                
	}

	function hapus_berkas(){
		$kode=$this->input->post('kode');
		$berkas=$this->input->post('berkas');
		$path='./assets/berkas/'.$berkas;
		unlink($path);
		$this->m_berkas->hapus_berkas($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/berkas');
	}

	function dwonload(){
        $kode=$this->uri->segment(4);
		$data = $this->db->get_where('tbl_berkas',['id_berkas'=>$kode])->row();
		// $download = base_url('/assets/images/galery/'.$data->galeri_gambar);
		force_download ('./assets/berkas/'.$data->nama_berkas,null);
		redirect('admin/berkas');
	}

}