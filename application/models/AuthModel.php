<?php

class AuthModel extends CI_Model
{
	public function login()
    {
        $username = $this->input->post('username');
        $password = MD5($this->input->post('password'));

        $checkuser = $this->db->select('a.*,b.*')->from('tbl_user a')->join('tbl_biodata b','a.nik = b.nik','left')->where('a.username',$username)->get()->row();

        if ($checkuser->password == $password) {

            $data = array(
				'id' => $checkuser->id_user,
                'username' => $checkuser->username,
                'name' => $checkuser->nama,
                'role' => $checkuser->role,
				'nik' => $checkuser->nik
            );

            $this->session->set_userdata($data);

            return true;    
            
        } else {
            return false;
        }
    }

	public function register()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('name');

		$data = array(
			'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
			'role' => $this->input->post('role'),
			'nik' => $nik
		);

		$this->db->insert('tbl_user',$data);

		$biodata = array(
			'nik' => $nik,
			'nama' => $nama
		);

		$this->db->insert('tbl_biodata',$biodata);

		return true;
	}
}
