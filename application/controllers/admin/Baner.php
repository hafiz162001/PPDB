<?php
class Baner extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_baner');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function index(){
		
		$x['data']=$this->m_baner->get_all_baner();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_baner',$x);
	}
	
	function simpan_baner(){
				$config['upload_path'] = './assets/home/baner/'; //path folder
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
	                        $config['source_image']='./assets/home/baner/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        $config['width']= 1920;
	                        $config['height']= 930;
	                        $config['new_image']= './assets/home/baner/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $kode=$this->session->userdata('idadmin');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$ket=strip_tags($this->input->post('xket'));
							$tampil=strip_tags($this->input->post('xtampil'));
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$author=$p['pengguna_nama'];
							$this->m_baner->simpan_baner($judul,$ket,$author,$tampil,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/baner');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/baner');
	                }
	                 
	            }else{
					redirect('admin/baner');
				}
				
	}
	
	function update_baner(){
	            $config['upload_path'] = './assets/home/baner/'; //path folder
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
	                        $config['source_image']='./assets/home/baner/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        $config['width']= 1920;
	                        $config['height']= 930;
	                        $config['new_image']= './assets/home/baner/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $kode=$this->session->userdata('idadmin');
	                        $id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$ket=strip_tags($this->input->post('xket'));
							$tampil=strip_tags($this->input->post('xtampil'));
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$author=$p['pengguna_nama'];
							$this->m_baner->update_baner($id,$judul,$ket,$author,$tampil,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/baner');
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/baner');
	                }
	                
	            }else{
	            			$kode=$this->session->userdata('idadmin');
	            			$id=$this->input->post('kode');
							$judul=strip_tags($this->input->post('xjudul'));
							$ket=strip_tags($this->input->post('xket'));
							$tampil=strip_tags($this->input->post('xtampil'));
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$author=$p['pengguna_nama'];
							$this->m_baner->update_tanpa_img($id,$judul,$ket,$author,$tampil);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/baner');
	            } 

	}

	function hapus_baner(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/home/baner/'.$gambar;
		unlink($path);
		$this->m_baner->hapus_baner($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/baner');
	}

}