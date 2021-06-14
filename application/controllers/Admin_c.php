<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('alumni_model');
        $this->load->model('prodi_model');
        $this->load->model('provinsi_model');
        $this->load->model('kabupaten_model');
        $this->load->model('pesan_model');
    }

    public function index()
    {
        $this->load->view('admin/login_admin');
    }

    public function dashboard()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 6; // 6 for activing nothing in sidebar
        $this->load->view('admin/dashboard', $data);
    }

    public function alumni()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        $data['active'] = 9; // 9 for activing menu alumni in sidebar
        $data['alumni'] = $this->alumni_model->fetch_all();
        $data['prodi'] = $this->prodi_model->fetch_all();
        $data['provinsi'] = $this->provinsi_model->fetch_all();
        $data['kabupaten'] = $this->kabupaten_model->fetch_all();
        $this->load->view('admin/alumni', $data);
    }

    public function editAlumni()
    {
        // $id $this->uri->segment(4);
        $data['active'] = 7; // 0 for activing menu alumni in sidebar
        $this->load->view('admin/edit_dataalumni', $data);
    }

    public function detail_alumni()
    {
        $nim = $this->uri->segment(4);
        // $nim =  $this->input->post('nim');
        $output = array(
            'title' => $this->alumni_model->get_nama_alumni($nim),
            'alumni_detail' => $this->alumni_model->detail_alumni($nim)
        );
        echo json_encode($output);
    }
}
