<?php
class Sejarah extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_sejarah');
        $this->load->model('m_identitas');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_sejarah->get_all_sejarah();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_sejarah',$x);
	}

	function simpan_sejarah(){
		$noSejarah = $this->db->query("SELECT * FROM tbl_sejarah WHERE status='2' ORDER BY id_sejarah DESC LIMIT 1" )->result();
		$noVisi = $this->db->query("SELECT * FROM tbl_sejarah WHERE status='1' ORDER BY id_sejarah DESC LIMIT 1" )->result();
		
		$hrefSejarah = $noSejarah[0]->href;
		$hrefSejarah += 1;

		$hrefVisi = $noVisi[0]->href;
		$hrefVisi += 1;
		$href=null; //variable kosong
		
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);



					$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=strip_tags($this->input->post('xdeskripsi'));
					$status=strip_tags($this->input->post('xstat'));
					if($status === '1'){
						$href = $hrefVisi;
					}elseif($status === '2'){
						$href = $hrefSejarah;
					}
					$kode=$this->session->userdata('idadmin');
					$this->m_sejarah->simpan_sejarah($judul,$deskripsi,$status,$href);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/sejarah');


		
	}

	function update_sejarah(){
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
					$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=strip_tags($this->input->post('xdeskripsi'));
					$status=strip_tags($this->input->post('xstat'));
					$this->m_sejarah->update_sejarah($kode,$judul,$deskripsi,$status);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/sejarah');
				}else{
					echo $this->session->set_flashdata('msg','warning');
					redirect('admin/sejarah');
				}

		}else{
					$kode=strip_tags($this->input->post('kode'));	
					$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=strip_tags($this->input->post('xdeskripsi'));
					$status=strip_tags($this->input->post('xstat'));
					$this->m_sejarah->update_sejarah_tanpa_img($kode,$judul,$deskripsi,$status);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/sejarah');
		
		}
	}
	function hapus_sejarah(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_sejarah->hapus_sejarah($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/sejarah');
	}

}
