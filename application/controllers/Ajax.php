<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ajax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();                
        $this->load->model('kabupaten_model');
    }        

    public function get_kabupaten()
    {
        $id_provinsi = $this->uri->segment(3);                
        echo $this->kabupaten_model->fetch_by_id_provinsi($id_provinsi);
    }
}
