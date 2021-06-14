<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wisuda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('alumnihasjadwalwisuda_model');
        $this->load->model('jadwalwisuda_model');
        $this->load->model('pesan_model');
    }

    function index()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 1; // 1 for activing menu biodata in sidebar

        // TODO: do load pendaftaran wisuda view if alumni haven't register wisuda yet
        $this->load->view('wisuda/pendaftaran', $data);

        // TODO: do load upload kelengkapan wisuda view if alumni choose wisuda offline
        // $this->load->view('wisuda/upload_kelengkapan', $data);

        // TODO: do load wisuda offline view if alumni completed fill the upload kelengkapan wisuda form
        // $this->load->view('wisuda/wisuda_offline', $data);

        // TODO: do load wisuda online view if alumni choose wisuda online
        // $this->load->view('wisuda/wisuda_online', $data);
    }

    function jadwal()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 3; // 3 for activing menu wiisuda in sidebar
        $data['alumni_status'] = $this->alumnihasjadwalwisuda_model->fetch_by_nim($this->session->userdata('id'));
        $this->load->view('wisuda/jadwalwisuda', $data);
    }

    function list()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 7; // 7 for activing menu wiisuda in sidebar
        $data['jadwal_wisuda'] = $this->jadwalwisuda_model->fetch_all_wisuda();        
        $this->load->view('wisuda/listwisuda', $data);
    }
    function pendaftaranwisuda()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 2; // 2 for activing menu wiisuda in sidebar
        $data['alumni_status'] = $this->alumnihasjadwalwisuda_model->fetch_by_nim($this->session->userdata('id'));
        $this->load->view('wisuda/pendaftaranwisuda', $data);
    }
    function daftarwisuda($choice)
    {
        $nim = $this->session->userdata('id');
        $status = $this->alumnihasjadwalwisuda_model->fetch_by_nim($nim);
        if (sizeof($status) == 0) {
            $this->alumnihasjadwalwisuda_model->alumni_choose($nim, $choice);
        }
        redirect('mahasiswa/wisuda/pendaftaran');
    }
    function detailjadwalwisuda()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 2; // 2 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/detail_jadwalwisuda', $data);
    }
    function kelengkapan()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 2; // 2 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/upload_kelengkapan', $data);
    }
    function wisudawan()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 8; // 8 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/wisudawan', $data);
    }
    
    function tambahwisuda()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 7; // 7 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/tambahwisuda', $data);
    }

    function storejadwalwisuda()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $tahungelsesi = $this->input->post('tahungelsesi');
        $nama = $this->input->post('nama');
        $kuota_instusi = $this->input->post('kuota_instusi');        
        $tot_kuota = $this->input->post('tot_kuota');        
        $tot_wisudawan = $this->input->post('tot_wisudawan');        
        $tgl_wisuda = $this->input->post('tgl_wisuda');        
        $status_pendaftaran = $this->input->post('status_pendaftaran');        

        // echo $tahungelsesi."<br>";
        // echo $nama."<br>";
        // echo $kuota_instusi."<br>";
        // echo $tot_kuota."<br>";
        // echo $tot_wisudawan."<br>";
        // echo $tgl_wisuda."<br>";
        // echo $status_pendaftaran."<br>";
        
        $this->jadwalwisuda_model->add_wisuda($tahungelsesi, $nama, $tgl_wisuda, $kuota_instusi, $tot_kuota, $status_pendaftaran);
        redirect('admin/wisuda');
    }
    
    function editwisuda()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 7; // 7 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/editwisuda', $data);
    }

    function adminjadwaldetail()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 7; // 7 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/admin_detail_jadwalwisuda', $data);
    }

    function admin_editdetailwisuda()
    {
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('admin');
        }
        $data['active'] = 7; // 7 for activing menu wiisuda in sidebar
        $this->load->view('wisuda/edit_detailjadwalwisuda', $data);
    }
}
