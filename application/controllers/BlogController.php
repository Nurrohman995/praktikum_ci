<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {
	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->library('session');
	// }
	public function index()
	{
		$this->load->view('login');
	}

	public function doLogin(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$status = TRUE;
		if($username == 'admin' && $password == 'admin'){
			$this->session->set_userdata('username',$username);
			redirect('Welcome');
		}else{
			redirect('/');
		}
	}

	public function logOut(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect(site_url('/'));
	}
}
