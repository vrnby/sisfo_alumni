<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('alumni_model');
        $this->load->model('biodata_akademik_model');
        $this->load->model('jenjang_model');
        $this->load->model('prodi_model');
    }

    function index()
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 4; // 4 for activing menu alumni in sidebar       
        $data['jenjang'] = $this->jenjang_model->fetch_all();
        $data['prodi'] = $this->prodi_model->fetch_all();

        $this->load->view('alumni/index', $data);
    }

    function fetch_data()
    {
        $keyword = $this->input->post('keyword');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $jenjang = $this->input->post('jenjang');
        $prodi = $this->input->post('prodi');
        $status_kerja = $this->input->post('status_kerja');
        $status_upload_foto = $this->input->post('status_upload_foto');
        $this->load->library('pagination');
        $config = array();
        $config['base_url'] = '#';
        $config['total_rows'] = $this->alumni_model->count_all($keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto);
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['next_link'] = '<span aria-hidden="true">&raquo;</span>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['num_links'] = 3;
        $this->pagination->initialize($config);
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config['per_page'];
        $output = array(
            'pagination_link' => $this->pagination->create_links(),
            'alumni_list' => $this->alumni_model->fetch_data(
                $config["per_page"],
                $start,
                $keyword,
                $tahun_lulus,
                $jenjang,
                $prodi,
                $status_kerja,
                $status_upload_foto
            )
        );
        echo json_encode($output);
    }

    function detail($nim)
    {
        // cek auth
        if (!$this->session->has_userdata('roles') || $this->session->userdata('roles') != 'alumni') {
            redirect('login');
        }
        $data['active'] = 4; // 4 for activing menu alumni in sidebar
        $data['alumni'] = $this->alumni_model->detail_by_nim($nim);
        $this->load->view('alumni/detail', $data);
    }

    function add()
    {
        $prodi = $this->input->post('prodi');
        $nim = $this->input->post('nim');
        $tahun_masuk = $this->input->post('tahun_masuk');
        $nama = $this->input->post('nama');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kel_desa = $this->input->post('kel_desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $facebook = $this->input->post('facebook');
        $linkedin = $this->input->post('linkedin');

        $alumni = array(
            'nim' => $nim,
            'username' => $nim,
            'password' => password_hash($nim, PASSWORD_BCRYPT),
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'no_hp' => $no_hp,
            'email' => $email,
            'facebook' => $facebook,
            'linkedin' => $linkedin,
            'id_provinsi' => $provinsi,
            'id_kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kelurahan_desa' => $kel_desa,
            'rw' => $rw,
            'rt' => $rt,
            'alamat' => $alamat,
            'issharebiodata' => 1,
            'issharepekerjaan' => 1
        );
        $this->alumni_model->add($alumni);

        $biodata_akademik = array(
            'nim_alumni' => $nim,
            'id_program_studi' => $prodi,
            'tahun_masuk' => $tahun_masuk
        );
        $this->biodata_akademik_model->add($biodata_akademik);
        $this->session->status_add_alumni = 'success';
        redirect('admin/alumni');
    }

    function edit($id)
    {
        $output = '';
        $result_alumni = $this->alumni_model->fetch_by_nim($id);
        $result_akademik = $this->biodata_akademik_model->fetch_by_nim($id);
        if (count($result_alumni) > 0 && count($result_akademik) > 0) {
            foreach ($result_alumni as $row) {
                $output = array(
                    'nim' => $row->nim,
                    'nama' => $row->nama,
                    'jenis_kelamin' => $row->jenis_kelamin,
                    'agama' => $row->agama,
                    'tempat_lahir' => $row->tempat_lahir,
                    'tanggal_lahir' => $row->tanggal_lahir,
                    'no_hp' => $row->no_hp,
                    'email' => $row->email,
                    'facebook' => $row->facebook,
                    'linkedin' => $row->linkedin,
                    'id_provinsi' => $row->id_provinsi,
                    'id_kabupaten' => $row->id_kabupaten,
                    'kecamatan' => $row->kecamatan,
                    'kelurahan_desa' => $row->kelurahan_desa,
                    'rt' => $row->rt,
                    'rw' => $row->rw,
                    'alamat' => $row->alamat
                );
            }
            foreach ($result_akademik as $row) {
                $output['id_program_studi'] = $row->id_program_studi;
                $output['tahun_masuk'] = $row->tahun_masuk;
            }
        }
        echo json_encode($output);
    }

    function update()
    {
        $prodi = $this->input->post('prodi');
        $nim = $this->input->post('nim_alumni');
        $tahun_masuk = $this->input->post('tahun_masuk');
        $nama = $this->input->post('nama');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kel_desa = $this->input->post('kel_desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $facebook = $this->input->post('facebook');
        $linkedin = $this->input->post('linkedin');

        $alumni = array(
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'no_hp' => $no_hp,
            'email' => $email,
            'facebook' => $facebook,
            'linkedin' => $linkedin,
            'id_provinsi' => $provinsi,
            'id_kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kelurahan_desa' => $kel_desa,
            'rw' => $rw,
            'rt' => $rt,
            'alamat' => $alamat
        );
        $this->alumni_model->update($nim, $alumni);

        $biodata_akademik = array(
            'id_program_studi' => $prodi,
            'tahun_masuk' => $tahun_masuk
        );

        $this->biodata_akademik_model->update($nim, $biodata_akademik);
        $this->session->status_update_alumni = 'success';
        redirect('admin/alumni');
    }

    function delete($nim)
    {
        // do delete ada in alumni, biodata akademik, and alumni has jadwal table
        $this->biodata_akademik_model->delete($nim);
        $this->alumni_model->delete($nim);
        $this->session->status_delete_alumni = 'success';
        redirect('admin/alumni');
    }
}
