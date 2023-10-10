<?php
class Daftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_tulisan','m_tulisan');
		$this->load->model('m_pengunjung');
		$this->load->model('m_identitas');
		$this->load->model('m_guru');
		$this->load->model('m_album');
		$this->load->model('m_galeri');
		$this->m_pengunjung->count_visitor();
        $this->load->library('form_validation');
		$this->load->model('M_code');
		$this->load->model('M_data_model');
        
	}
	function index(){
        $x['limit']=$this->m_tulisan->limit_berita();
		$x['no_peserta'] = $this->M_code->create_no_peserta(); 
		
		
		
		$x['category']=$this->db->get('tbl_kategori');
		$x['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 10");
		$x['limit']=$this->m_tulisan->limit_berita();
		$x['contact']=$this->m_identitas->get_all_pengguna();
		$x['date'] = date_default_timezone_set('Asia/Jakarta');
		$x['thismont']=$this->m_pengunjung->get_sum_visitor_this_month();
		$x['thisday'] =$this->m_pengunjung->get_average_perday();
		$this->load->view('depan/daftar',$x);
	}

	public function simpan()
    {
        // //Data siswa
        // $this->form_validation->set_rules('no_peserta','No Peserta','required');
		// $this->form_validation->set_rules('informasi','Informasi','required');
		// $this->form_validation->set_rules('nisn','Nisn','required');
        // $this->form_validation->set_rules('nama_lengkap','Nama','required');
		// $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		// $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
        // $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		// $this->form_validation->set_rules('anak_ke',' Anak','required');
		// $this->form_validation->set_rules('dari','Dari ','required');
        // $this->form_validation->set_rules('jumlah_saudara_kandung','Jumlah Saudara Kandung','required');
		// $this->form_validation->set_rules('jumlah_saudara_tiri','Jumlah Saudara Tiri','required');
		// $this->form_validation->set_rules('suku','Suku','required');
        // $this->form_validation->set_rules('alamat','Alamat','required');
		// $this->form_validation->set_rules('rt_siswa','RT','required');
		// $this->form_validation->set_rules('rw_siswa','RW','required');
        // $this->form_validation->set_rules('kode_pos','No Peserta');
		// $this->form_validation->set_rules('kecamatan_siswa','Kecamatan','required');
		// $this->form_validation->set_rules('kabupaten_siswa','Kabupaten','required');
        // $this->form_validation->set_rules('provinsi_siswa','Provinsi','required');
        // //kesehatan
		// $this->form_validation->set_rules('penyakit','Riwayat Penyakit');
		// $this->form_validation->set_rules('berat_badan','Berat Badan','required');
        // $this->form_validation->set_rules('tinggi_badan','Tinggi Badan','required');
		// $this->form_validation->set_rules('prestasi_1','Prestasi');
        // $this->form_validation->set_rules('prestasi_2','Prestasi');
        // $this->form_validation->set_rules('prestasi_3','Prestasi');
		// $this->form_validation->set_rules('asal_sekolah','Asal Sekolah','required');
        // //end datasiswa

        // //Ayah
        // $this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
		// $this->form_validation->set_rules('status_ayah','Status','required');
        // $this->form_validation->set_rules('agama_ayah','Agama','required');
		// $this->form_validation->set_rules('suku_ayah','Suku','required');
        // $this->form_validation->set_rules('alamat_ayah','Alamat','required');
		// $this->form_validation->set_rules('rt_ayah','RT','required');
		// $this->form_validation->set_rules('rw_ayah','RW','required');
        // $this->form_validation->set_rules('kode_pos_ayah','Kode Pos');
		// $this->form_validation->set_rules('kecamatan_ayah','Kecamatan','required');
		// $this->form_validation->set_rules('kabupaten_ayah','Kabupaten','required');
        // $this->form_validation->set_rules('provinsi_ayah','Provinsi','required');
        // $this->form_validation->set_rules('no_hp_ayah','No Hp','required');
		// $this->form_validation->set_rules('pendidikan_ayah','Pendidikan Terakhir','required');
		// $this->form_validation->set_rules('pekerjaan_ayah','Pekerjaan','required');
        // $this->form_validation->set_rules('nama_pekerjaan_ayah','Nama Pekerjaan','required');
		// $this->form_validation->set_rules('penghasilan_ayah','Kecamatan','required');
        // //end ayah

        // //Ibu
        // $this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
		// $this->form_validation->set_rules('status_ibu','Status','required');
        // $this->form_validation->set_rules('agama_ibu','Agama','required');
		// $this->form_validation->set_rules('suku_ibu','Suku','required');
        // $this->form_validation->set_rules('alamat_ibu','Alamat','required');
		// $this->form_validation->set_rules('rt_ibu','RT','required');
		// $this->form_validation->set_rules('rw_ibu','RW','required');
        // $this->form_validation->set_rules('kode_pos_ibu','Kode Pos');
		// $this->form_validation->set_rules('kecamatan_ibu','Kecamatan','required');
		// $this->form_validation->set_rules('kabupaten_ibu','Kabupaten','required');
        // $this->form_validation->set_rules('provinsi_ibu','Provinsi','required');
        // $this->form_validation->set_rules('no_hp_ibu','No Hp','required');
		// $this->form_validation->set_rules('pendidikan_ibu','Pendidikan Terakhir','required');
		// $this->form_validation->set_rules('pekerjaan_ibu','Pekerjaan','required');
        // $this->form_validation->set_rules('nama_pekerjaan_ibu','Nama Pekerjaan','required');
		// $this->form_validation->set_rules('penghasilan_ibu','Kecamatan','required');

        //END ibu
		
		$no_peserta = $this->input->post('no_peserta');
		$informasi = $this->input->post('informasi');
		$nisn = $this->input->post('nisn');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$anak_ke = $this->input->post('anak_ke');
		$dari = $this->input->post('dari');
		$jumlah_saudara_kandung = $this->input->post('jumlah_saudara_kandung');
		$jumlah_saudara_tiri = $this->input->post('jumlah_saudara_tiri');
		$suku = $this->input->post('suku');
		$warga_negara = $this->input->post('warga_negara');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kode_pos = $this->input->post('kode_pos');
		
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kabupaten = $this->input->post('kabupaten');
		$provinsi = $this->input->post('provinsi');
		//kesehatan
		$penyakit = $this->input->post('penyakit');
		$berat_badan = $this->input->post('berat_badan');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$prestasi_1 = $this->input->post('prestasi_1');
		$prestasi_2 = $this->input->post('prestasi_2');
		$prestasi_3 = $this->input->post('prestasi_3');
		$asal_sekolah = $this->input->post('asal_sekolah');
		//end

		//AYAH
		$nama_ayah = $this->input->post('nama_ayah');
		$status_ayah = $this->input->post('status_ayah');
		$agama_ayah = $this->input->post('agama_ayah');
		$suku_ayah = $this->input->post('suku_ayah');
		$warga_negara_ayah = $this->input->post('warga_negara_ayah');
		$alamat_ayah = $this->input->post('alamat_ayah');
		$rt_ayah = $this->input->post('rt_ayah');
		$rw_ayah = $this->input->post('rw_ayah');
		$kode_pos_ayah = $this->input->post('kode_pos_ayah');
		$kelurahan_ayah=  $this->input->post('kelurahan_ayah');
		$kecamatan_ayah = $this->input->post('kecamatan_ayah');
		$kabupaten_ayah = $this->input->post('kabupaten_ayah');
		$provinsi_ayah = $this->input->post('provinsi_ayah');
		$no_hp_ayah = $this->input->post('no_hp_ayah');
		$pendidikan_ayah = $this->input->post('pendidikan_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$status_kerja_ayah = $this->input->post('status_kerja_ayah');
		$nama_pekerjaan_ayah = $this->input->post('nama_pekerjaan_ayah');
		$penghasilan_ayah = $this->input->post('penghasilan_ayah');
		
		//Ibu
		$nama_ibu = $this->input->post('nama_ibu');
		$status_ibu= $this->input->post('status_ibu');
		$agama_ibu = $this->input->post('agama_ibu');
		$suku_ibu = $this->input->post('suku_ibu');
		$warga_negara_ibu = $this->input->post('warga_negara_ibu');
		$alamat_ibu = $this->input->post('alamat_ibu');
		$rt_ibu = $this->input->post('rt_ibu');
		$rw_ibu = $this->input->post('rw_ibu');
		$kode_pos_ibu = $this->input->post('kode_pos_ibu');
		$kelurahan_ibu=  $this->input->post('kelurahan_ibu');
		$kecamatan_ibu = $this->input->post('kecamatan_ibu');
		$kabupaten_ibu = $this->input->post('kabupaten_ibu');
		$provinsi_ibu = $this->input->post('provinsi_ibu');
		$no_hp_ibu= $this->input->post('no_hp_ibu');
		$pendidikan_ibu = $this->input->post('pendidikan_ibu');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$status_kerja_ibu = $this->input->post('status_kerja_ibu');
		$nama_pekerjaan_ibu = $this->input->post('nama_pekerjaan_ibu');
		$penghasilan_ibu = $this->input->post('penghasilan_ibu');

		//Wali
		$nama_wali = $this->input->post('nama_wali');
		$status_wali= $this->input->post('status_wali');
		$agama_wali = $this->input->post('agama_wali');
		$suku_wali = $this->input->post('suku_wali');
		$warga_negara_wali = $this->input->post('warga_negara_wali');
		$alamat_wali = $this->input->post('alamat_wali');
		$rt_wali= $this->input->post('rt_wali');
		$rw_wali = $this->input->post('rw_wali');
		$kode_pos_wali = $this->input->post('kode_pos_wali');
		$kelurahan_wali =  $this->input->post('kelurahan_wali');
		$kecamatan_wali = $this->input->post('kecamatan_wali');
		$kabupaten_wali = $this->input->post('kabupaten_wali');
		$provinsi_wali = $this->input->post('provinsi_wali');
		$no_hp_wali= $this->input->post('no_hp_wali');
		$pendidikan_wali = $this->input->post('pendidikan_wali');
		$pekerjaan_wali = $this->input->post('pekerjaan_wali');
		$status_kerja_wali = $this->input->post('status_kerja_wali');
		$nama_pekerjaan_wali = $this->input->post('nama_pekerjaan_wali');
		$penghasilan_wali = $this->input->post('penghasilan_wali');
			

	
        $data  =[
            'no_peserta' => $no_peserta,
            'info_pendaftaran' => $informasi,
            'nisn' => $nisn,
            'nama_peserta' => $nama_lengkap,
			'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
			'anak_ke' => $anak_ke,
			'dari_anak_ke' => $dari,
			'jumlah_saudara_kandung' => $jumlah_saudara_kandung,
			'jumlah_saudara_tiri' => $jumlah_saudara_tiri,
			'suku' => $suku,
			'warga_negara' => $warga_negara,
			'alamat_rumah' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'kode_pos' => $kode_pos,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'kabupaten' => $kabupaten,
			'provinsi' => $provinsi,
			'keterangan_sehat' => $penyakit,
			'bb' => $berat_badan,
			'tb' => $tinggi_badan,
			'prestasi_1' => $prestasi_1,
			'prestasi_2' => $prestasi_2,
			'prestasi_3' => $prestasi_3,
			'asal_sekolah' => $asal_sekolah,
			//ayah
			'nama_ayah' => $nama_ayah,
			'status_ayah' => $status_ayah,
			'agama_ayah' => $agama_ayah,
			'suku_ayah' => $suku_ayah,
			'warga_negara_ayah' => $warga_negara_ayah,
			'alamat_rumah_ayah' => $alamat_ayah,
			'rt_ayah' => $rt_ayah,
			'rw_ayah' => $rw_ayah,
			'kode_pos_ayah' => $kode_pos_ayah,
			'kelurahan_ayah' => $kelurahan_ayah,
			'kecamatan_ayah' => $kecamatan_ayah,
			'kabupaten_ayah' => $kabupaten_ayah,
			'provinsi_ayah' => $provinsi_ayah,
			'no_telepon_ayah' => $no_hp_ayah,
			'pendidikan_ayah' => $pendidikan_ayah,
			'pekerjaan_ayah' => $pekerjaan_ayah,
			'status_kerja_ayah' => $status_kerja_ibu,
			'penghasilan_ayah' => $penghasilan_ayah,
			//IBU ayo
			'nama_ibu' => $nama_ibu,
			'status_ibu' => $status_ibu,
			'agama_ibu' => $agama_ibu,
			'suku_ibu' => $suku_ibu,
			'warga_negara_ibu' => $warga_negara_ibu,
			'alamat_rumah_ibu' => $alamat_ibu,
			'rt_ibu' => $rt_ibu,
			'rw_ibu' => $rw_ibu,
			'kode_pos_ibu' => $kode_pos_ibu,
			'kelurahan_ibu' => $kelurahan_ibu,
			'kecamatan_ibu' => $kecamatan_ibu,
			'kabupaten_ibu' => $kabupaten_ibu,
			'provinsi_ibu' => $provinsi_ibu,
			'no_telepon_ibu' => $no_hp_ibu,
			'pendidikan_ibu' => $pendidikan_ibu,
			'pekerjaan_ibu' => $nama_pekerjaan_ibu,
			'status_kerja_ibu' => $status_kerja_ibu,
			'penghasilan_ibu' => $penghasilan_ibu
        ];
		$datawali = [
			'no_peserta'=> $no_peserta,
			'nama_wali' => $nama_wali,
			'status_wali' => $status_wali,
			'agama_wali' => $agama_wali,
			'suku_wali' => $suku_wali,
			'warga_negara_wali' => $warga_negara_wali,
			'alamat_rumah_wali' => $alamat_wali,
			'rt_wali' => $rt_wali,
			'rw_wali' => $rw_wali,
			'kode_pos_wali' => $kode_pos_wali,
			'kelurahan_wali' => $kelurahan_wali,
			'kecamatan_wali' => $kecamatan_wali,
			'kabupaten_wali' => $kabupaten_wali,
			'provinsi_wali' => $provinsi_wali,
			'no_telepon_wali' => $no_hp_wali,
			'pendidikan_wali' => $pendidikan_wali,
			'pekerjaan_wali' => $pekerjaan_wali,
			'status_kerja_wali' => $status_kerja_wali,
			'penghasilan_wali' => $penghasilan_wali,
		];

		
        $this->M_data_model->create($data,'tbl_pendaftaran');
		$this->M_data_model->create($datawali,'tbl_wali');
		echo $this->session->set_flashdata('msg','success');
		redirect($_SERVER['HTTP_REFERER']);
		
	}

	function simpan_pendaftar(){
		
        //END ibu
		
		$no_peserta = $this->input->post('no_peserta');
		$informasi = $this->input->post('informasi');
		$nisn = $this->input->post('nisn');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$anak_ke = $this->input->post('anak_ke');
		$dari = $this->input->post('dari');
		$jumlah_saudara_kandung = $this->input->post('jumlah_saudara_kandung');
		$jumlah_saudara_tiri = $this->input->post('jumlah_saudara_tiri');
		$suku = $this->input->post('suku');
		$warga_negara = $this->input->post('warga_negara');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kode_pos = $this->input->post('kode_pos');
		
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kabupaten = $this->input->post('kabupaten');
		$provinsi = $this->input->post('provinsi');
		//kesehatan
		$penyakit = $this->input->post('penyakit');
		$berat_badan = $this->input->post('berat_badan');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$prestasi_1 = $this->input->post('prestasi_1');
		$prestasi_2 = $this->input->post('prestasi_2');
		$prestasi_3 = $this->input->post('prestasi_3');
		$asal_sekolah = $this->input->post('asal_sekolah');
		//end

		//AYAH
		$nama_ayah = $this->input->post('nama_ayah');
		$status_ayah = $this->input->post('status_ayah');
		$agama_ayah = $this->input->post('agama_ayah');
		$suku_ayah = $this->input->post('suku_ayah');
		$warga_negara_ayah = $this->input->post('warga_negara_ayah');
		$alamat_ayah = $this->input->post('alamat_ayah');
		$rt_ayah = $this->input->post('rt_ayah');
		$rw_ayah = $this->input->post('rw_ayah');
		$kode_pos_ayah = $this->input->post('kode_pos_ayah');
		$kelurahan_ayah=  $this->input->post('kelurahan_ayah');
		$kecamatan_ayah = $this->input->post('kecamatan_ayah');
		$kabupaten_ayah = $this->input->post('kabupaten_ayah');
		$provinsi_ayah = $this->input->post('provinsi_ayah');
		$no_hp_ayah = $this->input->post('no_hp_ayah');
		$pendidikan_ayah = $this->input->post('pendidikan_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$status_kerja_ayah = $this->input->post('status_kerja_ayah');
		$nama_pekerjaan_ayah = $this->input->post('nama_pekerjaan_ayah');
		$penghasilan_ayah = $this->input->post('penghasilan_ayah');
		
		//Ibu
		$nama_ibu = $this->input->post('nama_ibu');
		$status_ibu= $this->input->post('status_ibu');
		$agama_ibu = $this->input->post('agama_ibu');
		$suku_ibu = $this->input->post('suku_ibu');
		$warga_negara_ibu = $this->input->post('warga_negara_ibu');
		$alamat_ibu = $this->input->post('alamat_ibu');
		$rt_ibu = $this->input->post('rt_ibu');
		$rw_ibu = $this->input->post('rw_ibu');
		$kode_pos_ibu = $this->input->post('kode_pos_ibu');
		$kelurahan_ibu=  $this->input->post('kelurahan_ibu');
		$kecamatan_ibu = $this->input->post('kecamatan_ibu');
		$kabupaten_ibu = $this->input->post('kabupaten_ibu');
		$provinsi_ibu = $this->input->post('provinsi_ibu');
		$no_hp_ibu= $this->input->post('no_hp_ibu');
		$pendidikan_ibu = $this->input->post('pendidikan_ibu');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$status_kerja_ibu = $this->input->post('status_kerja_ibu');
		$nama_pekerjaan_ibu = $this->input->post('nama_pekerjaan_ibu');
		$penghasilan_ibu = $this->input->post('penghasilan_ibu');

		//Wali
		$nama_wali = $this->input->post('nama_wali');
		$status_wali= $this->input->post('status_wali');
		$agama_wali = $this->input->post('agama_wali');
		$suku_wali = $this->input->post('suku_wali');
		$warga_negara_wali = $this->input->post('warga_negara_wali');
		$alamat_wali = $this->input->post('alamat_wali');
		$rt_wali= $this->input->post('rt_wali');
		$rw_wali = $this->input->post('rw_wali');
		$kode_pos_wali = $this->input->post('kode_pos_wali');
		$kelurahan_wali =  $this->input->post('kelurahan_wali');
		$kecamatan_wali = $this->input->post('kecamatan_wali');
		$kabupaten_wali = $this->input->post('kabupaten_wali');
		$provinsi_wali = $this->input->post('provinsi_wali');
		$no_hp_wali= $this->input->post('no_hp_wali');
		$pendidikan_wali = $this->input->post('pendidikan_wali');
		$pekerjaan_wali = $this->input->post('pekerjaan_wali');
		$status_kerja_wali = $this->input->post('status_kerja_wali');
		$nama_pekerjaan_wali = $this->input->post('nama_pekerjaan_wali');
	
		$penghasilan_wali = $this->input->post('penghasilan_wali');
			
        $data  =[
            'no_peserta' => $no_peserta,
            'info_pendaftaran' => $informasi,
            'nisn' => $nisn,
            'nama_peserta' => $nama_lengkap,
			'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
			'anak_ke' => $anak_ke,
			'dari_anak_ke' => $dari,
			'jumlah_saudara_kandung' => $jumlah_saudara_kandung,
			'jumlah_saudara_tiri' => $jumlah_saudara_tiri,
			'suku' => $suku,
			'warga_negara' => $warga_negara,
			'alamat_rumah' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'kode_pos' => $kode_pos,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'kabupaten' => $kabupaten,
			'provinsi' => $provinsi,
			'keterangan_sehat' => $penyakit,
			'bb' => $berat_badan,
			'tb' => $tinggi_badan,
			'prestasi_1' => $prestasi_1,
			'prestasi_2' => $prestasi_2,
			'prestasi_3' => $prestasi_3,
			'asal_sekolah' => $asal_sekolah,
			//ayah
			'nama_ayah' => $nama_ayah,
			'status_ayah' => $status_ayah,
			'agama_ayah' => $agama_ayah,
			'suku_ayah' => $suku_ayah,
			'warga_negara_ayah' => $warga_negara_ayah,
			'alamat_rumah_ayah' => $alamat_ayah,
			'rt_ayah' => $rt_ayah,
			'rw_ayah' => $rw_ayah,
			'kode_pos_ayah' => $kode_pos_ayah,
			'kelurahan_ayah' => $kelurahan_ayah,
			'kecamatan_ayah' => $kecamatan_ayah,
			'kabupaten_ayah' => $kabupaten_ayah,
			'provinsi_ayah' => $provinsi_ayah,
			'no_telepon_ayah' => $no_hp_ayah,
			'pendidikan_ayah' => $pendidikan_ayah,
			'pekerjaan_ayah' => $pekerjaan_ayah,
			'status_kerja_ayah' => $status_kerja_ibu,
			'penghasilan_ayah' => $penghasilan_ayah,
			//IBU
			'nama_ibu' => $nama_ibu,
			'status_ibu' => $status_ibu,
			'agama_ibu' => $agama_ibu,
			'suku_ibu' => $suku_ibu,
			'warga_negara_ibu' => $warga_negara_ibu,
			'alamat_rumah_ibu' => $alamat_ibu,
			'rt_ibu' => $rt_ibu,
			'rw_ibu' => $rw_ibu,
			'kode_pos_ibu' => $kode_pos_ibu,
			'kelurahan_ibu' => $kelurahan_ibu,
			'kecamatan_ibu' => $kecamatan_ibu,
			'kabupaten_ibu' => $kabupaten_ibu,
			'provinsi_ibu' => $provinsi_ibu,
			'no_telepon_ibu' => $no_hp_ibu,
			'pendidikan_ibu' => $pendidikan_ibu,
			'pekerjaan_ibu' => $nama_pekerjaan_ibu,
			'status_kerja_ibu' => $status_kerja_ibu,
			'penghasilan_ibu' => $penghasilan_ibu
        ];
		$datawali = [
			'no_peserta'=> $no_peserta,
			'nama_wali' => $nama_wali,
			'status_wali' => $status_wali,
			'agama_wali' => $agama_wali,
			'suku_wali' => $suku_wali,
			'warga_negara_wali' => $warga_negara_wali,
			'alamat_rumah_wali' => $alamat_wali,
			'rt_wali' => $rt_wali,
			'rw_wali' => $rw_wali,
			'kode_pos_wali' => $kode_pos_wali,
			'kelurahan_wali' => $kelurahan_wali,
			'kecamatan_wali' => $kecamatan_wali,
			'kabupaten_wali' => $kabupaten_wali,
			'provinsi_wali' => $provinsi_wali,
			'no_telepon_wali' => $no_hp_wali,
			'pendidikan_wali' => $pendidikan_wali,
			'pekerjaan_wali' => $pekerjaan_wali,
			'status_kerja_wali' => $status_kerja_wali,
			'penghasilan_wali' => $penghasilan_wali,
		];

	

		
        $this->M_data_model->create($data,'tbl_pendaftaran');
		$this->M_data_model->create($datawali,'tbl_wali');
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/Pendaftar');
	}
		
		
    
}
