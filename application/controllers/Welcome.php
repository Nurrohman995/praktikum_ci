<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('username') != 'admin'){
			redirect('/');
		}
		$this->load->library('session');
	}
	public function index()
	{
		
		$entries = $this->Entry_Model->get_all();
		$data = [
            'penulis' => 'Nur Rohman',
			'nim' => 'G.231.17.0150',
			'entries' => $entries
        ];
		// $this->load->view('blog', $data);
		TemplateData('blog', $data);
		
	}
	public function tambah()
	{
		TemplateData('tambah_blog');
	}
	public function proses_tambah(){
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']  = '10240';
		$config['overwrite'] = true;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('image')) {
			$config['image_library']='gd2';
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '50%';
			$config['width']     = 971;
			$config['height']   = 490;
			$this->load->library('image_lib', $config);
	        $this->image_lib->resize();
			$media = $this->upload->data();
			$data['gambar'] = $media['file_name'];
		}else{
			$error = array('error' => $this->upload->display_errors());
		}
        $data['judul']= $_POST['judul'];
        $data['isi'] = $_POST['isi'];
        $data['waktu'] = date('Y-m-d h:i:s');
        $this->db->insert('entries', $data);
		redirect(site_url('welcome'));
	}

	public function detail($id)
	{
		$data['entry'] = $this->Entry_Model->get_entry($id);
		$tes = $this->Entry_Model->get_entry($id);
		if($tes->gambar == null){
			$gambar = base_url('upload/default.jpg');
		}else{
			$gambar = base_url('upload/'.$tes->gambar);
		}
		$data['gambar'] = $gambar;
		TemplateData('blog_detail',$data);
	}

	public function edit($id){
		$tes = $this->Entry_Model->get_entry($id);
		if($tes->gambar == null){
			$gambar = base_url('upload/default.jpg');
		}else{
			$gambar = base_url('upload/'.$tes->gambar);
		}
		$data = [
			'entry' => $this->Entry_Model->get_entry($id),
			'gambar' => $gambar
		];
		TemplateData('edit', $data);
	}

	public function proses_edit($id){
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size']  = '10240';
		$config['overwrite'] = true;
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('image')) {
			$config['image_library']='gd2';
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '50%';
			$config['width']     = 971;
			$config['height']   = 490;
			$this->load->library('image_lib', $config);
	        $this->image_lib->resize();
			$media = $this->upload->data();
			$data['gambar'] = $media['file_name'];
		}else{
			$error = array('error' => $this->upload->display_errors());
		}
        $data['judul']= $_POST['judul'];
        $data['isi'] = $_POST['isi'];
        $data['waktu'] = date('Y-m-d h:i:s');
        $this->db->where('id',$id);
        $this->db->update('entries', $data);
        // $this->db->get_where($id, 'entries',$data);
		redirect(site_url('welcome'));
	}
	public function delete($id){
		$entry = $this->Entry_Model->get_entry($id);
		if($entry->gambar == null){

		}else{
			unlink('upload/'.$entry->gambar);
		}
		$this->db->where('id',$id);
		$this->db->delete('entries');
		redirect(site_url('welcome'));
	}
}
