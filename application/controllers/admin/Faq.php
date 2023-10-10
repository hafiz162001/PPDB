<?php
class Faq extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_faq');
		$this->load->model('m_identitas');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_faq->get_all_faq();
		
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_faq',$x);
	}

	function simpan_faq(){
		$noWajib = $this->db->query("SELECT * FROM tbl_faq WHERE status='2' ORDER BY id_faq DESC LIMIT 1" )->result();
		$noPilihan = $this->db->query("SELECT * FROM tbl_faq WHERE status='1' ORDER BY id_faq DESC LIMIT 1" )->result();
		
		$hrefWajib = $noWajib[0]->href;
		$hrefWajib += 1;

		$hrefPilihan = $noPilihan[0]->href;
		$hrefPilihan += 1;
		$href=null; //variable kosong
		
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
					$config['width']= 710;
					$config['height']= 460;
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gambar=$gbr['file_name'];	
					$pertanyaan=strip_tags($this->input->post('xtanya'));
					$jawaban=strip_tags($this->input->post('xjawab'));
					$status=strip_tags($this->input->post('xstat'));
					if($status === '1'){
						$href = $hrefPilihan;
					}elseif($status === '2'){
						$href = $hrefWajib;
					}
					$kode=$this->session->userdata('idadmin');
					$this->m_faq->simpan_faq($pertanyaan,$jawaban,$status,$href,$gambar);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/faq');
				}else{
					echo $this->session->set_flashdata('msg','warning');
					redirect('admin/faq');
				}

		}else{
			redirect('admin/faq');
		}

		
	}

	function update_faq(){
		// $kode=strip_tags($this->input->post('kode'));
		// $pertanyaan=strip_tags($this->input->post('xtanya'));
		// $jawaban=strip_tags($this->input->post('xjawab'));
		// $status=strip_tags($this->input->post('xstat'));
		// $this->m_faq->update_faq($kode,$pertanyaan,$jawaban,$status);
		// echo $this->session->set_flashdata('msg','info');
		// redirect('admin/faq');

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
					$config['width']= 30;
					$config['height']= 20;
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gambar=$gbr['file_name'];
					
					$kode=strip_tags($this->input->post('kode'));	
					$pertanyaan=strip_tags($this->input->post('xtanya'));
					$jawaban=strip_tags($this->input->post('xjawab'));
					$status=strip_tags($this->input->post('xstat'));
					$this->m_faq->update_faq($kode,$pertanyaan,$jawaban,$status,$gambar);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/faq');
				}else{
					echo $this->session->set_flashdata('msg','warning');
					redirect('admin/faq');
				}

		}else{
					$kode=strip_tags($this->input->post('kode'));	
					$pertanyaan=strip_tags($this->input->post('xtanya'));
					$jawaban=strip_tags($this->input->post('xjawab'));
					$status=strip_tags($this->input->post('xstat'));
					$this->m_faq->update_faq_tanpa_img($kode,$pertanyaan,$jawaban,$status);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/faq');
		
		}
	}
	function hapus_faq(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_faq->hapus_faq($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/faq');
	}

}
