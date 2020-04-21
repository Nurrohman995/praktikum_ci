<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$entries = $this->Entry_Model->get_all();
		$data = [
            'penulis' => 'Nur Rohman',
			'nim' => 'G.231.17.0150',
			'entries' => $entries
        ];
		$this->load->view('blog', $data);
	}
	public function tambah()
	{
		$this->load->view('tambah_blog');
	}
	public function proses_tambah(){
		$this->Entry_Model->tambah($_POST);
		redirect(site_url('welcome'));
	}

	public function detail($id)
	{
		$data['entry'] = $this->Entry_Model->get_entry($id);
		$this->load->view('blog_detail', $data);
	}
}
