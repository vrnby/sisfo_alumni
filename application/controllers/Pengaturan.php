<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('alumni_model');
        $this->load->model('admin_model');
        $this->load->model('pesan_model');
    }

    function password()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 5; // 5 for activing menu pengaturan in sidebar
        $this->load->view('pengaturan/ubah_password', $data);
    }

    function password_admin()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'admin') {
            redirect('login');
        }
        $data['active'] = 13; // 13 for activing menu pengaturan in sidebar
        $this->load->view('pengaturan/ubah_password_admin', $data);
    }

    function ubah_password()
    {
        $oldpassword = $this->input->post('oldpassword');
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');
        // echo $oldpassword.'<br>';
        // echo $password.'<br>';
        // echo $repassword.'<br>';
        $alumni = $this->alumni_model->fetch_by_username($this->session->userdata('username'));
        if (count($alumni) > 0) {
            foreach ($alumni as $row) {
                echo $row->username . " " . $row->password;
                if (password_verify($oldpassword, $row->password)) {
                    if ($password == $repassword) {
                        // do update password alumni                        
                        $alumni = array(
                            'password' => password_hash($password, PASSWORD_BCRYPT)
                        );
                        $this->alumni_model->update($this->session->userdata('username'), $alumni);
                        $this->session->status_password = 'success';
                        redirect('pengaturan/password');
                    } else {
                        $this->session->status_password = 'new_password_not_match';
                        redirect('pengaturan/password');
                    }
                }
            }
            $this->session->status_password = 'old_password_not_false';
            redirect('pengaturan/password');
        } else {
            $this->session->status_password = 'username_not_found';
            redirect('pengaturan/password');
        }
    }

    function ubah_password_admin()
    {
        $oldpassword = $this->input->post('oldpassword');
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');

        $admin = $this->admin_model->fetch_by_username($this->session->userdata('username'));
        if (count($admin) > 0) {
            foreach ($admin as $row) {
                echo $row->username . " " . $row->password;
                if (password_verify($oldpassword, $row->password)) {
                    if ($password == $repassword) {
                        // do update password admin                        
                        $admin = array(
                            'password' => password_hash($password, PASSWORD_BCRYPT)
                        );
                        $this->admin_model->update($row->id, $admin);
                        $this->session->status_password = 'success';
                        redirect('admin/pengaturan/password');
                    } else {
                        $this->session->status_password = 'new_password_not_match';
                        redirect('admin/pengaturan/password');
                    }
                }
            }
            $this->session->status_password = 'old_password_not_false';
            redirect('admin/pengaturan/password');
        } else {
            $this->session->status_password = 'username_not_found';
            redirect('admin/pengaturan/password');
        }
    }
}
