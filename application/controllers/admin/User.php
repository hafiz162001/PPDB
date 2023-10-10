<?php
class User extends CI_Controller{ 
    function __construct(){
        parent:: __construct();
        $this->load->model('m_tulisan');
        $this->load->model('m_kontak');
        $this->load->model('m_pengunjung');
        $this->load->model('m_pengguna');
        $this->load->model('m_identitas');
        $this->load->model('model_user');
        $this->load->model('model_wilayah');
        $this->m_pengunjung->count_visitor();
    }
    function index(){
        $x['berita']=$this->m_tulisan->get_berita_home();
        $x['contact']=$this->m_identitas->get_all_pengguna();
        $x['title'] = $this->db->query("SELECT * FROM tbl_identitas");
        $x['limit']=$this->m_tulisan->limit_berita();
        $x['data']=$this->m_identitas->get_all_pengguna();
        $this->load->view('depan/login',$x);
    }

    function Daftar(){
        $x['berita']=$this->m_tulisan->get_berita_home();
        $x['contact']=$this->m_identitas->get_all_pengguna();
        $x['limit']=$this->m_tulisan->limit_berita();
        $x['data']=$this->m_identitas->get_all_pengguna();
        $x['provinsi']    = $this->db->get('provinces');
        $x['kota']       = $this->db->get('regencies');
        $this->load->view('depan/daftar',$x);
    }

    function getKota($key)
    {
        $city   = $this->model_wilayah->getdata_kota($key);

        echo "<option value='0'>---PILIH KOTA---</option>";
        foreach($city->result() as $kota):
            echo "<option value=".$kota->id.">".$kota->name."</option>";
        endforeach;

    }

    function simpan_registrasiUser()
    {
        $re_pass                        = md5($this->input->post('re-pass'));
        $data['email']                  = $this->input->post('email');
        $data['pass']                   = md5($this->input->post('pass'));
        $data['username']               = $this->input->post('username');
        // $data['no_telp']                = $this->input->post('no_telp');
        $data['nama_depan']             = $this->input->post('nama_depan');
        $data['nama_belakang']          = $this->input->post('nama_belakang');
        $data['id_provinces']           = $this->input->post('provinsi');
        $data['id_regencies']           = $this->input->post('kota');
        $data['alamat']                 = $this->input->post('alamat');
        $data['aktif']                  = 'NO';
        $data['tgl_daftar']             = time()+3600*7;

        // memeriksa username (sudah terpakai atau belum)
        $query = $this->db->get('user');
        foreach($query->result() as $row)
        {
            if($row->username == $data['username'])
            {
                $this->session->set_flashdata('info','Username sudah terpakai');
                redirect(site_url('admin/user/daftar'));
            }
        }

        // cek password sama atau tidak
        if($re_pass != $data['pass'])           
        {
            // cek password baru sama atau tidak
            $this->session->set_flashdata('info','Password tidak sama');
                redirect(site_url('admin/user/daftar'));
        }
        // jika email diisi maka kirim pesan verifikasi email kepada user/customer
        // jika email tidak diisi pendaftaran selesai tanpa kirim email verifikasi
        else
        {
            $this->model_user->getInsert($data);
            redirect(site_url());

            // // kirim email ke user/customer
            // $ci = get_instance();
      //       $ci->load->library('email');
            // $enkripsi                = md5($data['tgl_daftar']);
      //       $config['protocol']  = 'smtp';
      //       $config['smtp_host']     = 'ssl://smtp.gmail.com';
      //       $config['smtp_port']     = '465';
      //       $config['smtp_user']     = 'ilhamefendi0318@gmail.com';
      //       $config['smtp_pass']     = 'ilhams12';
      //       $config['charset']       = 'utf-8';
      //       $config['mailtype']  = 'html';
      //       $config['wordwrap']  = 'TRUE';
      //       $config['newline']       = "\r\n";
            
            
      //       $ci->email->initialize($config);
     
      //       $ci->email->from($config['smtp_user'], 'Admin Penjualan');
      //       $list = array('https://mail.google.com');
   //       $ci->email->to($list);
      //       $ci->email->subject('Verifikasi Akun Ini');
      //       $ci->email->message("terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>
      //                            <a href=".base_url('/home/verifikasi/'.$enkripsi).">".base_url('/home/verifikasi/'.$enkripsi));
      //       if ($this->email->send()) {
      //           echo "Silahkan cek email Anda untuk melakukan verifikasi Akun Top Tracker Store<br>
      //              Kembali ke halaman <a href=".bas().">utama</a>";
      //              redirect(site_url('/home/verifikasi'));
      //       } else {
      //           show_error($this->email->print_debugger());
      //       }
        }
    }

    function cek_login()
    {
        $user   = $this->input->post('username');
        $pass   = md5($this->input->post('pass'));

        $this->model_user->cek_login($user,$pass);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
