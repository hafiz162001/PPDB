<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	function getInsert($data)
	{
		$this->db->insert('user', $data);
	}

	function getUser($id_user)
	{
		$query = $this->db->where('id_user',$id_user)
						  ->get('user');
		return $query->row();
	}

	function verifikasi($key)
	{
		$data['aktif'] = 'YES';
		$this->db->where('md5(tgl_daftar)',$key)
				 ->update('user',$data);
		return TRUE;
	}

	function cek_login($user,$pass)
	{
		//masuk menggunakan username atau email
		$query 	= $this->db->where('email', $user)
						   ->or_where('username', $user)
				 		   ->where('pass', $pass)
				 		   ->get('user');

		$user 	= $query->row();

		// set session
		// jika email ada jalankan query 
		// lain jika 
		// username ada jalankan query
		if($user->email || $user->username)
		{
			foreach($query->result() as $row)
			{
				$data = array(
							  'id'		 => $row->id_user,
							  'email' 	 => $row->email,
							  'username' => $row->username,
							  'pass' 	 => $row->pass
							  );
				$this->session->set_userdata($data);
				redirect(site_url());
			}
		}
		else
		{
			$this->session->set_flashdata('info','Username atau Password salah');
			redirect(site_url());
		}

	}

	function logout()
	{
		$array_session=array(
			'cms_session_user'=>'',
			'cms_session_islogin'=>'',
			'cms_session_role'=>'',
			);
		$this->session->unset_userdata($array_session);
		
			redirect(base_url(),'refresh');
	}

}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */