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
		$nim = $this->input->post('nim');
		$w = array('nim' => $nim,);
		$cek = $this->alumni_model->getData('alumni', $w)->result();

		if ($cek == null) {
			$this->session->status_login = 'nim_not_found';
			return redirect('carinim');
		} else {
			$mail = $this->obfuscate_email($cek[0]->email);
			$data['email'] = $arrayName = array('email' => $cek[0]->email, 'mail' => $mail);
			$this->load->view('landing_page/identifikasi_akun', $data);
		}
	}

	// hide partial email
	function obfuscate_email($email)
	{
		$em   = explode("@", $email);
		$name = implode('@', array_slice($em, 0, count($em) - 1));
		$len  = floor(strlen($name) / 2);

		return substr($name, 0, $len) . str_repeat('*', $len) . "@" . end($em);
	}

	// send email to reset pass
	public function email_reset_password_validation(){
		$this->load->helper('string');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		if($this->form_validation->run()){

			$email = $this->input->post('email');
			$reset_key =  random_string('alnum', 50);
			$data = array('email' => $email,  'token' => $reset_key);

			if($this->alumni_model->addIns('reset_pass',$data))
			{				
				$config = [
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					//masukkan email gmail valid disini semisal admin@gmail.com
					'smtp_user' => 'admsisfoalumni@gmail.com',
					//masukkan password email gmail valid disini semisal 123
					'smtp_pass' => '$isfoalumni123',
					'smtp_port' => 465,
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n"
				];
				$this->load->library('email');
				$this->email->initialize($config);
				
				//masukkan email gmail valid disini semisal admin@gmail.com
				$this->email->from('admsisfoalumni@gmail.com', 'Admin Sisfo Alumni');
				$this->email->to($email);
				$this->email->subject("Reset your password");

				$message = "<p>Anda melakukan permintaan reset password</p>";
				$message .= "<a href='".site_url('resetpass/'.$reset_key)."'>klik reset password</a>";
				$this->email->message($message);
				
				if($this->email->send())
				{
					echo "silahkan cek email ".$email.' untuk melakukan reset password';
				}else
				{
					echo $this->email->print_debugger();
					echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
				}
				
				echo "<br><br><a href='".site_url("akun/passreset")."'>Kembali ke Menu Login</a>";

			}else {
				die("Email yang anda masukan belum terdaftar");
			}
		} else{			
			redirect('carinim','refresh');
			
		}
	}

	public function laman_pass()
	{
		$this->load->view('landing_page/reset_pass');
	}

	public function reset_pass()
	{
		$w = array('token' => $this->input->post('key'), );
		$gd = $this->alumni_model->getData('reset_pass', $w)->result();
		
		$email = $gd[0]->email; 
		$where = array('email' => $email);
		$pas = $this->input->post('pass');
		$pass = password_hash($pas, PASSWORD_BCRYPT);
		$data = array('password' => $pass);
		
		if ($this->alumni_model->updateData('alumni',$where, $data)) {
			
			redirect('login','refresh');
			
		}
	}
}
