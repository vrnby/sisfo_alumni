<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('alumni_model');
        $this->load->model('biodata_akademik_model');
        $this->load->model('jenjang_model');
        $this->load->model('prodi_model');
        $this->load->model('informasi_model');
    }

    function index()
    {
        $this->load->view('landing_page/landing_page');
    }

    function login()
    {
        $this->load->view('landing_page/login');
    }

    function alumni()
    {
        $data['jenjang'] = $this->jenjang_model->fetch_all();
        $data['prodi'] = $this->prodi_model->fetch_all();
        $this->load->view('landing_page/v_alumni', $data);
    }
    function detailalumni()
    {

        $this->load->view('landing_page/v_detailalumni');
    }

    function listpengumuman()
    {
        $data['pengumuman'] = $this->informasi_model->fetch_all_by_id_tipe_informasi(1);
        $this->load->view('landing_page/v_pengumuman', $data);
    }
    function detailpengumuman($id)
    {
        $data['data'] = $this->informasi_model->fetch_by_id($id);
        $this->load->view('landing_page/v_detailpengumuman', $data);
    }
    function listagenda()
    {
        $data['agenda'] = $this->informasi_model->fetch_all_by_id_tipe_informasi(2);
        $this->load->view('landing_page/v_agenda', $data);
    }

    function detailagenda($id)
    {
        $data['data'] = $this->informasi_model->fetch_by_id($id);
        $this->load->view('landing_page/v_detailagenda', $data);
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
            'alumni_list' => $this->alumni_model->fetch_data_landing_page(
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

    function listgaleri()
    {
        $this->load->view('landing_page/v_galeri');
    }
    function tracerstudy()
    {
        $this->load->view('landing_page/v_tracerstudy');
    }
    function kontakkami()
    {
        $this->load->view('landing_page/v_kontakkami');
    }
    function bantuan()
    {
        $this->load->view('landing_page/v_bantuan');
    }
}
