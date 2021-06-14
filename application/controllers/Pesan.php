<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('alumni_model');
	}

	public function index()
	{ }

	public function list()
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 12; // 12 for activing menu alumni in sidebar
		$data['pesan'] = $this->pesan_model->fetch_all();
		$this->load->view('pesan/listpesan', $data);
	}

	public function add()
	{
		$nim = $this->input->post("nim");
		$email = $this->input->post("email");
		$judul = $this->input->post("judul");
		$uraian = $this->input->post("uraian");
		// do check nim
		$alumni = $this->alumni_model->check_by_nim($nim);
		if ($alumni > 0) {
			$tanggal = date('Y-m-d');
			// add pesan
			$this->pesan_model->add($tanggal, $nim, $email, $judul, $uraian);
			$response = array(
				'status' => 200, 
				'message' => 'Berhasil mengirim data'				
			);
		} else {
			$response = array(
				'status' => 404, 
				'message' => 'NIM Alumni tidak ditemukan'				
			);
		}
	
		echo json_encode($response);		
		
	}

	public function detailpesan($id)
	{
		// cek auth
		if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
			redirect('admin');
		}
		$data['active'] = 12; // 12 for activing menu alumni in sidebar
		$data['pesan'] = $this->pesan_model->fetch_by_id($id);
		$this->pesan_model->pesanreaded($id);
		$this->load->view('pesan/detailpesan', $data);
	}
}
