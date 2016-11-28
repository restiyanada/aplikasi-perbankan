<?php 
defined('BASEPATH') or exit('no direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$d['title']= 'Login';
		$d['judul'] = 'login';
		$this->load->view('v_login', $d);
	}

	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek = $this->m_login->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}

			redirect ('Home');
		}
		else
		{
		$this->session->set_flashdata('pesan', 'maaf, username atau password salah');
		redirect('login');
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}