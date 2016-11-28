<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('username'))
		{
			redirect('login');
	}
	}
	
	public function index()
	{
		$data=array(
			'active_home'=>'active'
		);
		$this->load->view('element/header', $data);
		$this->load->view('v_home');
		$this->load->view('element/footer');
		$d['username'] = $this->session->userdata('username');
	}
		
	}
