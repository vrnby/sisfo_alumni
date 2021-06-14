<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('informasi_model');
		$this->load->model('tipeinformasi_model');
		$this->load->model('pesan_model');
	}

	public function index()
	{ }

	public function list()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 10; // 10 for activing menu alumni in sidebar
		$data['informasi'] = $this->informasi_model->fetch_all();
		$data['tipe_informasi'] = $this->tipeinformasi_model->fetch_all();

		$this->load->view('informasi/list', $data);
	}

	public function add()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 10; // 10 for activing menu alumni in sidebar
		$data['tipe_informasi'] = $this->tipeinformasi_model->fetch_all();
		$this->load->view('informasi/tambah', $data);
	}

	public function store()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$judul_informasi = $this->input->post('judul_informasi');
		$jenis_informasi = $this->input->post('jenis_informasi');
		$content_informasi = $this->input->post('content_informasi');
		$rangkuman = substr(strip_tags($content_informasi), 0, 125) . " ...";
		$image = $this->_uploadImage();
		$file = $this->_uploadFile();

		// echo $content_informasi."<br><br><br>";
		// echo $string_content;

		$data = array(
			'judul' => $judul_informasi,
			'tanggal' => date('Y-m-d'),
			'isi' => $content_informasi,
			'rangkuman' => $rangkuman,
			'id_tipe_informasi' => $jenis_informasi,
			'foto' => $image,
			'file' => $file
		);

		$this->informasi_model->add($data);
		$this->session->status_add_informasi = 'success';
		redirect('admin/informasi');
	}

	public function edit($id)
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 10; // 10 for activing menu alumni in sidebar
		$data['informasi'] = $this->informasi_model->fetch_by_id($id);
		$data['tipe_informasi'] = $this->tipeinformasi_model->fetch_all();
		$this->load->view('informasi/edit', $data);
	}

	public function update()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$id = $this->input->post('id');
		$judul_informasi = $this->input->post('judul_informasi');
		$jenis_informasi = $this->input->post('jenis_informasi');
		$content_informasi = $this->input->post('content_informasi');
		$rangkuman = substr(strip_tags($content_informasi), 0, 125) . " ...";
		$image = $_FILES['image']['name'];
		$dokumen = $_FILES['dokumen']['name'];
		$result = $this->informasi_model->fetch_image_and_file_by_id($id);
		if ($image != "") {
			if ($result > 0) {
				if ($result[0]->foto != "") {
					$this->_deleteImage($result[0]->foto);
				}
			}
			$image = $this->_uploadImage();
		} else {
			if ($result > 0) {
				if ($result[0]->foto != "") {
					$image = $result[0]->foto;
				}
			}
		}
		if ($dokumen != "") {
			if ($result > 0) {
				if ($result[0]->file != "") {
					$this->_deleteFile($result[0]->file);
				}
			}
			$dokumen = $this->_uploadFile();
		} else {
			if ($result > 0) {
				if ($result[0]->file != "") {
					$dokumen = $result[0]->file;
				}
			}
		}

		$data = array(
			'judul' => $judul_informasi,
			'tanggal' => date('Y-m-d'),
			'isi' => $content_informasi,
			'rangkuman' => $rangkuman,
			'foto' => $image,
			'file' => $dokumen,
			'id_tipe_informasi' => $jenis_informasi
		);

		$this->informasi_model->update($id, $data);
		$this->session->status_edit_informasi = 'success';
		redirect('admin/informasi');
	}

	public function delete($id)
	{
		$result = $this->informasi_model->fetch_image_and_file_by_id($id);
		if ($result > 0) {
			if ($result[0]->foto != "") {
				$this->_deleteImage($result[0]->foto);
			}
			if ($result[0]->file != "") {
				$this->_deleteFile($result[0]->file);
			}
		}

		$this->informasi_model->delete($id);
		$this->session->status_delete_informasi = 'success';
		redirect('admin/informasi');
	}

	function tinymce_upload($id)
	{
		// do upload to database, to prevent unuse image and can delete the image
		$time = date("Y-m-d-H-i-s");
		$config['upload_path'] = './assets/img/posting/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name'] = $time . "-" . $id;
		$config['overwrite'] = true;
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('file')) {
			$this->output->set_header('HTTP/1.0 500 Server Error');
			exit;
		} else {
			$file = $this->upload->data();
			$this->output
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode(['location' => base_url() . 'assets/img/posting/' . $file['file_name']]))
				->_display();
			exit;
		}
	}

	function _uploadImage()
	{
		$time = date("Y-m-d-H-i-s");
		$id = $this->session->userdata('id');
		$config['upload_path'] = './assets/img/posting/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['file_name'] = $time . "-" . $id;
		$config['overwrite'] = true;
		$config['max_size'] = 2048;
		$this->load->library('upload', $config, 'imageupload');
		$this->imageupload->initialize($config);
		if ($this->imageupload->do_upload('image')) {
			$file = $this->imageupload->data();
			return $file['file_name'];
		}
		return "";
	}

	function _uploadFile()
	{
		$time = date("Y-m-d-H-i-s");
		$id = $this->session->userdata('id');
		$config['upload_path'] = './assets/file/posting/';
		$config['allowed_types'] = 'pdf';
		$config['file_name'] = $time . "-" . $id;
		$config['overwrite'] = true;
		$config['max_size'] = 0;
		$this->load->library('upload', $config, 'fileupload');
		$this->fileupload->initialize($config);
		if ($this->fileupload->do_upload('dokumen')) {
			$file = $this->fileupload->data();
			return $file['file_name'];
		}
		return "";
	}

	function _deleteImage($image)
	{
		unlink(FCPATH . 'assets/img/posting/' . $image);
	}

	function _deleteFile($file)
	{
		unlink(FCPATH . 'assets/file/posting/' . $file);
	}
}
