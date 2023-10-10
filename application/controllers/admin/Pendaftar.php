<?php
class Pendaftar extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pendaftar');
		$this->load->model('M_code');
		$this->load->library('Pdf');
		$this->load->library('upload');
		
	}


	function index(){
		$x['data']=$this->M_pendaftar->get_all_pendaftaran()->result();

		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");

		$this->load->view('admin/v_pendaftar',$x);
	}

	public function tambah()
	{	$x['no_peserta'] = $this->M_code->create_no_peserta();
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		$this->load->view('admin/v_add_pendaftar',$x);

	}
	function hapus_peserta(){
		$kode=$this->input->post('kode');
		
		$this->M_pendaftar->hapus_peserta($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Pendaftar');
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$wali=$this->uri->segment(5);
		$x['data']=$this->M_pendaftar->get_pendaftar_by_kode($kode);
		$x['wali']=$this->M_pendaftar->get_pendaftar_by_wali($wali);
		$x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
		
		$this->load->view('admin/v_edit_pendaftar',$x);
	}

	public function print()
	{
		$kode=$this->uri->segment(4);
		$wali=$this->uri->segment(5);
		$data=$this->M_pendaftar->get_pendaftar_by_kode($kode)->row_array();
		$wali=$this->M_pendaftar->get_pendaftar_by_wali($wali)->row_array();
		$pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        // mencetak string 
		$pdf->image('assets/images/logo.png',10,10,25,25); 
		$pdf->SetFont('Times','B','12');
		$pdf->Cell(0,5,'PEMERINTAH KOTA TASIKMALAYA',0,1,'C');
		$pdf->Cell(0,5,'DINAS PENDIDIKAN',0,1,'C');
		$pdf->SetFont('Times','B','15');
		$pdf->Cell(0,5,'YAYASAN PONDOK PESANTREN ISHLAHUL UMMAH',0,1,'C');
		$pdf->SetFont('Times','I','8');
		$pdf->Cell(0,5,'Jl. Cieunteung No. 80 Blk Meubel Sakura Rt 05/Rw 04 Kel.Argasari Kec.Cihideung Kota Tasikmalaya',0,1,'C');
		$pdf->Cell(0,2,'Website: https://www.ishlahul-ummah-tasikmalaya.sch.id | E-Mail: smpitishlahulummmah@yahoo.co.id,sma.it_iubs@yahoo.com',0,1,'C');

		$pdf->Cell(10,7,'',0,1);
		$pdf->SetLineWidth(1);
		$pdf->Line(15,36,180,36);
		$pdf->SetLineWidth(0);
		$pdf->Line(15,37,180,37);
        $pdf->Cell(15,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(20,6,'Data Siswa  ',0,0);
		$pdf->Cell(15,7,'',0,1);
        $pdf->SetFont('Arial','',11);

        $pdf->Cell(42,6,'No.Peserta ',0,0);
        $pdf->Cell(85,6,': '.$data['no_peserta'],0,0);
		$pdf->Cell(15,7,'',0,1);

		$pdf->Cell(42,6,'Informasi Pendaftaran',0,0);
        $pdf->Cell(86,6,': '.$data['info_pendaftaran'],0,0);
		$pdf->Cell(15,7,'',0,1);

		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(20,6,'Identitas Calon',0,0);
		$pdf->Cell(15,7,'',0,1);

		$pdf->SetFont('Arial','',11);
		$pdf->Cell(42,6,'Nisn',0,0);
		$pdf->Cell(66,6,': '.$data['nisn'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Nama Lengkap',0,0);
		$pdf->Cell(42,6,': '.$data['nama_peserta'],0,0);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Tempat Lahir',0,0);
		$pdf->Cell(46,6,': '.$data['tempat_lahir'],0,0);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Tanggal Lahir',0,0);
		$pdf->Cell(46,6,': '.$data['tanggal_lahir'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Jenis Kelamin',0,0);
		$pdf->Cell(46,6,': '.$data['jenis_kelamin'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Anak Ke',0,0);
		$pdf->Cell(46,6,': '.$data['anak_ke'].' Dari '.$data['dari_anak_ke'].' Saudara',0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Suku',0,0);
		$pdf->Cell(46,6,': '.$data['suku'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Warga Negara',0,0);
		$pdf->Cell(46,6,': '.$data['warga_negara'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Alamat Lengkap',0,0);
		$pdf->Cell(46,6,': '.$data['alamat_rumah'].' - Rt/Rw '.' '.$data['rt'].'/'.$data['rw'].' - '.$data['kelurahan'].' - '.$data['kecamatan'].' - '.$data['kabupaten'].' - '.$data['provinsi'],0,0);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Penyakit Pernah Diderita',0,0);
		$pdf->Cell(46,6,': '.$data['keterangan_sehat'],0,0);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Tinggi Badan',0,0);
		$pdf->Cell(46,6,': '.$data['tb'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Berat Badan',0,0);
		$pdf->Cell(46,6,': '.$data['bb'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(20,6,'Prestasi Akademik',0,0);

		$pdf->SetFont('Arial','',11);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Prestasi 1',0,0);
		$pdf->Cell(46,6,': '.$data['prestasi_1'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Prestasi 2',0,0);
		$pdf->Cell(46,6,': '.$data['prestasi_2'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Prestasi 3',0,0);
		$pdf->Cell(46,6,': '.$data['prestasi_3'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Asal Sekolah',0,0);
		$pdf->Cell(46,6,': '.$data['asal_sekolah'],0,0);

		
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(15,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(20,6,'Identitas Orang Tua',0,0);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Nama  Ayah',0,0);
		$pdf->Cell(46,6,': '.$data['nama_ayah'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Status ',0,0);
		$pdf->Cell(46,6,': '.$data['status_ayah'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Agama Ayah',0,0);
		$pdf->Cell(46,6,': '.$data['agama_ayah'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Suku',0,0);
		$pdf->Cell(46,6,': '.$data['suku_ayah'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Warga Negara',0,0);
		$pdf->Cell(46,6,': '.$data['warga_negara_ayah'],0,0);
       
    	$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Alamat Lengkap',0,0);
		$pdf->Cell(46,6,': '.$data['alamat_rumah_ayah'].' - Rt/Rw '.' '.$data['rt_ayah'].'/'.$data['rw_ayah'].' - '.$data['kelurahan_ayah'].' - '.$data['kecamatan_ayah'].' - '.$data['kabupaten_ayah'].' - '.$data['provinsi_ayah'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'No Handpone',0,0);
		$pdf->Cell(46,6,': '.$data['no_telepon_ayah'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Pendidikan Terakhir',0,0);
		$pdf->Cell(46,6,': '.$data['pendidikan_ayah'],0,0);

		if( $data['status_kerja_ayah'] === '1'){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Pekerjaan',0,0);
			$pdf->Cell(46,6,': '.$data['pekerjaan_ayah'],0,0);
		}else{
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Pekerjaan',0,0);
			$pdf->Cell(46,6,': Tidak Bekerja',0,0);
		}
		
			
		if( $data['status_kerja_ayah'] === '2'){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': Tidak Bekerja',0,0);
		
		}elseif($data['penghasilan_ayah'] === '&ge;5.000.000' ){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': >5.000.000',0,0);
		}else{
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': '.$data['penghasilan_ayah'],0,0);
		}

			//Ibu
		$pdf->AddPage();
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(15,7,'',0,1);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Nama  Ibu',0,0);
		$pdf->Cell(46,6,': '.$data['nama_ibu'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Status ',0,0);
		$pdf->Cell(46,6,': '.$data['status_ibu'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Agama Ibu',0,0);
		$pdf->Cell(46,6,': '.$data['agama_ibu'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Suku',0,0);
		$pdf->Cell(46,6,': '.$data['suku_ibu'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Warga Negara',0,0);
		$pdf->Cell(46,6,': '.$data['warga_negara_ibu'],0,0);
       
    	$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Alamat Lengkap',0,0);
		$pdf->Cell(46,6,': '.$data['alamat_rumah_ibu'].' - Rt/Rw '.' '.$data['rt_ibu'].'/'.$data['rw_ibu'].' - '.$data['kelurahan_ibu'].' - '.$data['kecamatan_ibu'].' - '.$data['kabupaten_ibu'].' - '.$data['provinsi_ibu'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'No Handpone',0,0);
		$pdf->Cell(46,6,': '.$data['no_telepon_ibu'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Pendidikan Terakhir',0,0);
		$pdf->Cell(46,6,': '.$data['pendidikan_ibu'],0,0);

		if( $data['status_kerja_ibu'] === '1'){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Pekerjaan',0,0);
			$pdf->Cell(46,6,': '.$data['pekerjaan_ibu'],0,0);
		}else{
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Pekerjaan',0,0);
			$pdf->Cell(46,6,': Tidak Bekerja',0,0);
		}
		
		if( $data['status_kerja_ibu'] === '2'){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': Tidak Bekerja',0,0);
		
		}elseif($data['penghasilan_ibu'] === '&ge;5.000.000' ){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': >5.000.000',0,0);
		}else{
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': '.$data['penghasilan_ibu'],0,0);
		}
		if($wali != []){

		
		//Wali
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(15,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(20,6,'Identitas Wali',0,0);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Nama  Wali',0,0);
		$pdf->Cell(46,6,': '.$wali['nama_wali'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Status ',0,0);
		$pdf->Cell(46,6,': '.$wali['status_wali'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Agama Wali',0,0);
		$pdf->Cell(46,6,': '.$wali['agama_wali'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Suku',0,0);
		$pdf->Cell(46,6,': '.$wali['suku_wali'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Warga Negara',0,0);
		$pdf->Cell(46,6,': '.$wali['warga_negara_wali'],0,0);
       
    	$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Alamat Lengkap',0,0);
		$pdf->Cell(46,6,': '.$wali['alamat_rumah_wali'].' - Rt/Rw '.' '.$wali['rt_wali'].'/'.$wali['rw_wali'].' - '.$wali['kelurahan_wali'].' - '.$wali['kecamatan_wali'].' - '.$wali['kabupaten_wali'].' - '.$wali['provinsi_wali'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'No Handpone',0,0);
		$pdf->Cell(46,6,': '.$wali['no_telepon_wali'],0,0);

		$pdf->Cell(15,7,'',0,1);
		$pdf->Cell(42,6,'Pendidikan Terakhir',0,0);
		$pdf->Cell(46,6,': '.$wali['pendidikan_wali'],0,0);

		if( $wali['status_kerja_wali'] === '1'){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Pekerjaan',0,0);
			$pdf->Cell(46,6,': '.$wali['pekerjaan_wali'],0,0);
		}else{
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Pekerjaan',0,0);
			$pdf->Cell(46,6,': Tidak Bekerja',0,0);
		}
		
		if( $wali['status_kerja_wali'] === '2'){

			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': Tidak Bekerja',0,0);

		

		}elseif($wali['penghasilan_wali'] === '&ge;5.000.000'){
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': >5.000.000',0,0);

		}else{
			$pdf->Cell(15,7,'',0,1);
			$pdf->Cell(42,6,'Penghasilan Perbulan',0,0);
			$pdf->Cell(46,6,': '.$wali['penghasilan_wali'],0,0);
			
		}
	}else{

	}

        $pdf->Output();
	}
	function garis(){
		$this->SetLineWidth(1);
		$this->Line(10,36,138,36);
		$this->SetLineWidth(0);
		$this->Line(10,37,138,37);
		}
		function letak($gambar){
			//memasukkan gambar untuk header
			$this->Image($gambar,10,10,20,25);
			//menggeser posisi sekarang
		}
			
		function judul($teks1, $teks2, $teks3, $teks4, $teks5){
				$this->Cell(25);
				$this->SetFont(‘Times’,’B’,’12’);
				$this->Cell(0,5,$teks1,0,1,’C’);
				$this->Cell(25);
				$this->Cell(0,5,$teks2,0,1,’C’);
				$this->Cell(25);
				$this->SetFont(‘Times’,’B’,’15’);
				$this->Cell(0,5,$teks3,0,1,’C’);
				$this->Cell(25);
				$this->SetFont(‘Times’,’I’,’8′);
				$this->Cell(0,5,$teks4,0,1,’C’);
				$this->Cell(25);
				$this->Cell(0,2,$teks5,0,1,’C’);
			}
	
}
