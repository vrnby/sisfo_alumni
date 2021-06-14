<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {    
    public function __construct()
    {
        parent::__construct();
        // cek auth
        if(!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni'){
            redirect('login');
        }  
        $this->load->model('alumni_model');        
        $this->load->model('biodata_akademik_model');
        $this->load->model('riwayatpekerjaan_model');
        $this->load->model('provinsi_model');
        $this->load->model('kabupaten_model');
    }

    function index() 
    {            
        $data['active'] = 1; // 1 for activing menu biodata in sidebar        
        $data['alumni'] = $this->alumni_model->detail_by_nim($this->session->userdata('id'));
        $data['pekerjaan'] = $this->riwayatpekerjaan_model->fetch_last_by_nim($this->session->userdata('id'));
        $this->load->view('biodata/index',$data);
    }

    function edit($id) 
    {        
        $data['id'] = $id;
        $data['active'] = 1; // 1 for activing menu biodata in sidebar
        $data['provinsi'] = $this->provinsi_model->fetch_all();
        $data['kabupaten'] = $this->kabupaten_model->fetch_all();
        $data['alumni'] = $this->alumni_model->fetch_by_nim($this->session->userdata('id'));
        $this->load->view('biodata/edit', $data);
    }

    function riwayatpekerjaan()
    {        
        $data['active'] = 1; // 1 for activing menu biodata in sidebar
        $data['pekerjaan'] = $this->riwayatpekerjaan_model->fetch_by_nim($this->session->userdata('id'));
        $this->load->view('biodata/riwayatpekerjaan', $data);
    }

    function tambahpekerjaan()
    {
        $data['active'] = 1; // 1 for activing menu biodata in sidebar
        $data['provinsi'] = $this->provinsi_model->fetch_all();        
        $this->load->view('biodata/tambahpekerjaan', $data);
    }

    function editpekerjaan($id)
    {
        $data['active'] = 1; // 1 for activing menu biodata in sidebar
        $data['provinsi'] = $this->provinsi_model->fetch_all();
        $data['kabupaten'] = $this->kabupaten_model->fetch_all();
        $data['pekerjaan'] = $this->riwayatpekerjaan_model->fetch_by_id($id);
        $this->load->view('biodata/editpekerjaan', $data);
    }

    function updatepekerjaan($id)
    {
        $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
        $nama = $this->input->post('nama');
        $jenis_kantor = $this->input->post('jenis_kantor');
        $alamat_kantor = $this->input->post('alamat_kantor');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $no_telp_kantor = $this->input->post('no_telp_kantor');
        $no_fax_kantor = $this->input->post('no_fax_kantor');
        $website_kantor = $this->input->post('website_kantor');
        $email_kantor = $this->input->post('email_kantor');
        $infojpc = $this->input->post('infojpc');
        $jabatan = $this->input->post('jabatan');
        $status_pekerjaan = $this->input->post('status_pekerjaan');
        $pendapatan = $this->input->post('pendapatan');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_keluar = $this->input->post('tgl_keluar');
               
        $data = array(             
            'id_provinsi' => $provinsi, 
            'id_kota' => $kabupaten, 
            'jenis_pekerjaan' => $jenis_pekerjaan, 
            'nama' => $nama, 
            'alamat' => $alamat_kantor, 
            'telepon' => $no_telp_kantor, 
            'no_fax' => $no_fax_kantor, 
            'website' => $website_kantor, 
            'jabatan' => $jabatan, 
            'email' => $email_kantor, 
            'status' => $status_pekerjaan, 
            'pendapatan' => $pendapatan, 
            'tgl_masuk' => $tgl_masuk, 
            'tgl_keluar' => $tgl_keluar, 
            'info_jpc' => $infojpc, 
            'jenis_kantor' => $jenis_kantor 
        );
        $this->riwayatpekerjaan_model->update($id, $data);
        $this->session->status_update_riwayat_pekerjaan = "success";
        redirect('biodata/riwayatpekerjaan');
    }

    function storepekerjaan()
    {
        $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
        $nama = $this->input->post('nama');
        $jenis_kantor = $this->input->post('jenis_kantor');
        $alamat_kantor = $this->input->post('alamat_kantor');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $no_telp_kantor = $this->input->post('no_telp_kantor');
        $no_fax_kantor = $this->input->post('no_fax_kantor');
        $website_kantor = $this->input->post('website_kantor');
        $email_kantor = $this->input->post('email_kantor');
        $infojpc = $this->input->post('infojpc');
        $jabatan = $this->input->post('jabatan');
        $status_pekerjaan = $this->input->post('status_pekerjaan');
        $pendapatan = $this->input->post('pendapatan');
        $tgl_masuk = $this->input->post('tgl_masuk');
        $tgl_keluar = $this->input->post('tgl_keluar');
               
        $data = array(
            'nim_alumni' => $this->session->userdata('username'), 
            'id_provinsi' => $provinsi, 
            'id_kota' => $kabupaten, 
            'jenis_pekerjaan' => $jenis_pekerjaan, 
            'nama' => $nama, 
            'alamat' => $alamat_kantor, 
            'telepon' => $no_telp_kantor, 
            'no_fax' => $no_fax_kantor, 
            'website' => $website_kantor, 
            'jabatan' => $jabatan, 
            'email' => $email_kantor, 
            'status' => $status_pekerjaan, 
            'pendapatan' => $pendapatan, 
            'tgl_masuk' => $tgl_masuk, 
            'tgl_keluar' => $tgl_keluar, 
            'info_jpc' => $infojpc, 
            'jenis_kantor' => $jenis_kantor 
        );
        $this->riwayatpekerjaan_model->add($data);
        $this->session->status_add_riwayat_pekerjaan = "success";
        redirect('biodata/riwayatpekerjaan');
    }    

    function deletepekerjaan($id)
    {
        $this->riwayatpekerjaan_model->delete($id);        
        $this->session->status_delete_riwayat_pekerjaan = 'success';
        redirect('biodata/riwayatpekerjaan');
    }
}