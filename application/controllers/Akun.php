<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin_model');
        $this->load->model('alumni_model');
    }

    public function alumni_cek()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alumni = $this->alumni_model->fetch_by_username($username);
        if (count($alumni) > 0) {
            foreach ($alumni as $row) {
                // echo $row->username." ".$row->password;
                if (password_verify($password, $row->password)) {
                    $user = array(
                        'id' => $row->nim,
                        'username' => $row->username,
                        'nama' => $row->nama,
                        'email' => $row->email,
                        'roles' => 'alumni'
                    );
                    $this->session->set_userdata($user);
                    redirect('mahasiswa/biodata');
                }
            }
            $this->session->status_login = 'password_not_found';
            redirect('login');
        } else {
            $this->session->status_login = 'username_not_found';
            redirect('login');
        }
    }

    public function alumni_logout()
    {
        $array_items = array('id', 'username', 'nama', 'email', 'roles');
        $this->session->unset_userdata($array_items);
        redirect('login');
    }

    public function login_cek()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->admin_model->fetch_by_username($username);
        if (count($admin) > 0) {
            foreach ($admin as $row) {
                echo $row->username . " " . $row->password;
                if (password_verify($password, $row->password)) {
                    $user = array(
                        'id' => $row->id,
                        'username' => $row->username,
                        'nama' => $row->nama,
                        'email' => $row->email,
                        'roles' => 'admin'
                    );
                    $this->session->set_userdata($user);
                    redirect('admin/dashboard');
                }
            }
            $this->session->status_login = 'password_not_found';
            redirect('admin');
        } else {
            $this->session->status_login = 'username_not_found';
            redirect('admin');
        }
    }

    public function logout()
    {
        $array_items = array('id', 'username', 'nama', 'email', 'roles');
        $this->session->unset_userdata($array_items);
        redirect('admin');
    }

    public function index()
    {
        // do show list account admin
    }

    public function add()
    {
        // do add account admin

        // encrypt encrypt setup
        // $iv_length = openssl_cipher_iv_length(METHOD_PASSWORD);
        // $iv = openssl_random_pseudo_bytes($iv_length);
        // $encrypt_password = openssl_encrypt($password, METHOD_PASSWORD, PASSWORD_KEY, 0, $iv);
    }

    public function edit()
    {
        // do send detail account by id
    }

    public function update()
    {
        // do update account admin
    }

    public function delete()
    {
        // do delete account admin
    }
    public function carinim()
    {
        $this->load->view('landing_page/cari_nim');
    }
    public function identifikasi()
    {
        $this->load->view('landing_page/identifikasi_akun');
    }
}
