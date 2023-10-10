<?php
class Berita extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengumuman');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_pengumuman->get_all_pengumuman();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_pengumuman',$x);
	}

	function simpan_pengumuman() {
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

	                        $photo=$gbr['file_name'];
							
							$judul=strip_tags($this->input->post('xjudul'));
							$link=strip_tags($this->input->post('xlink'));
							$deskripsi=$this->input->post('xdeskripsi');
							$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
							$trim     = trim($string);
							$slug     = strtolower(str_replace(" ", "-", $trim));
                 	     
							$kode=$this->session->userdata('idadmin');
							$this->m_pengumuman->simpan_pengumuman($judul,$deskripsi,$photo,$slug,$link);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/berita');
						}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/berita');
	                }

	            }else{
					redirect('admin/berita');
				}


	}

	// function update_pengumuman(){
	// 	$kode=strip_tags($this->input->post('kode'));
	// 	$judul=strip_tags($this->input->post('xjudul'));
	// 	$deskripsi=$this->input->post('xdeskripsi');
	// 	$this->m_pengumuman->update_pengumuman($kode,$judul,$deskripsi,$photo);
	// 	echo $this->session->set_flashdata('msg','info');
	// 	redirect('admin/pengumuman');
	// }


	function update_pengumuman() {
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
							$judul=strip_tags($this->input->post('xjudul'));
							$deskripsi=$this->input->post('xdeskripsi');
							$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
							$trim     = trim($string);
							$slug     = strtolower(str_replace(" ", "-", $trim));
							$link=strip_tags($this->input->post('xlink'));
							$kode=strip_tags($this->input->post('kode'));
							$this->m_pengumuman->update_pengumuman($kode,$judul,$deskripsi,$gambar,$slug,$link);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/berita');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/berita');
	                }

	            }else{
					$judul=strip_tags($this->input->post('xjudul'));
					$deskripsi=$this->input->post('xdeskripsi');
					$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
					$trim     = trim($string);
					$slug     = strtolower(str_replace(" ", "-", $trim));
					$link=strip_tags($this->input->post('xlink'));
					$kode=strip_tags($this->input->post('kode'));
					$this->m_pengumuman->update_pengumuman_tanpa_gambr($kode,$judul,$deskripsi,$slug,$link);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/berita');
	            }
	}

	function hapus_pengumuman(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_pengumuman->hapus_pengumuman($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/berita');
	}

}