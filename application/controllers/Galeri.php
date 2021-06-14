<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('galeri_model');
	}

	public function index()
	{ }

	public function list()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 11; // 11 for activing menu alumni in sidebar
		$data['galeri'] = $this->galeri_model->fetch_all();
		$this->load->view('galeri/listgaleri', $data);
	}

	public function tambah()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 11; // 11 for activing menu alumni in sidebar
		$this->load->view('galeri/addgaleri', $data);
	}

	public function store()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$nama = $this->input->post('nama');
		$tgl = $this->input->post('tgl_foto');
		$foto = $this->_uploadFile();
		
		$this->galeri_model->add($tgl, $nama, $foto);
		$this->session->status_add_galeri = 'success';
		redirect('admin/galeri');
	}

	public function edit($id)
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 11; // 11 for activing menu alumni in sidebar
		$data['galeri'] = $this->galeri_model->fetch_by_id($id);
		$this->load->view('galeri/editgaleri', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$tgl = $this->input->post('tgl_foto');
		$foto = $_FILES['input-file']['name'];
		$result = $this->galeri_model->fetch_foto_by_id($id);
		if ($foto != "") {
			if ($result > 0) {
				if ($result[0]->foto != "") {
					$this->_deleteFile($result[0]->foto);
				} 
			}
			$foto = $this->_uploadFile();
		} else {
			if ($result > 0) {
				$foto = $result[0]->foto;
			}
		}

		$this->galeri_model->update($id, $tgl, $nama, $foto);
		$this->session->status_edit_galeri = 'success';
		redirect('admin/galeri');
	}

	public function delete($id)
	{
		$result = $this->galeri_model->fetch_foto_by_id($id);
		if ($result > 0) {			
			if ($result[0]->foto != "") {
				$this->_deleteFile($result[0]->foto);
			}
		}
		$this->galeri_model->delete($id);
		$this->session->status_delete_galeri = 'success';
		redirect('admin/galeri');
	}

	function _uploadFile()
	{
		$time = date("Y-m-d-H-i-s");
		$id = $this->session->userdata('id');
		$config['upload_path'] = './assets/img/gallery/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name'] = $time . "-" . $id;
		$config['overwrite'] = true;
		$config['max_size'] = 0;
		$this->load->library('upload', $config, 'fileupload');
		$this->fileupload->initialize($config);
		if ($this->fileupload->do_upload('input-file')) {
			$file = $this->fileupload->data();
			return $file['file_name'];
		}
		return "";
	}

	function _deleteFile($file)
	{
		unlink(FCPATH . 'assets/img/gallery/' . $file);
	}
}
