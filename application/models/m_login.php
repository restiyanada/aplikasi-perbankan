<?php
defined('BASEPATH') or exit('no direct access allowed');

class m_login extends CI_Model{
	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user_login');
	}
}