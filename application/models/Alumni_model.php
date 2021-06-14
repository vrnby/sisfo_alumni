<?php
class Alumni_model extends CI_MODEL
{
    public function fetch_all()
    {
        // select a.nim, a.nama, concat_ws(' ', j.nama, p.nama), b.tahun_masuk, b.tanggal_lulus prodi 
        // from biodata_akademik b join alumni a on b.nim_alumni = a.nim join program_studi p on 
        // b.id_program_studi = p.id join jenjang j on p.id_jenjang = j.id;        

        $this->db->select("a.nim, a.nama, concat_ws(' ', j.nama, p.nama) as prodi, b.tahun_masuk, b.tanggal_lulus");
        $this->db->from('biodata_akademik b');
        $this->db->join('alumni a', 'b.nim_alumni = a.nim', 'left');
        $this->db->join('program_studi p', 'b.id_program_studi = p.id', 'left');
        $this->db->join('jenjang j', 'p.id_jenjang = j.id', 'left');

        $query = $this->db->get();
        return $query->result();
    }

    public function make_query($keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto)
    {
        // SELECT a.nim, a.nama, a.email, concat_ws(' ', j.nama, p.nama) as prodi, b.tahun_masuk, b.tanggal_lulus FROM alumni a LEFT JOIN biodata_akademik b ON a.nim = b.nim_alumni LEFT JOIN program_studi p ON b.id_program_studi = p.id LEFT JOIN jenjang j ON p.id_jenjang = j.id WHERE a.nim like '%%' OR a.nama like '%%' OR a.email like '%%';
        $query = "
        SELECT a.nim, a.nama, a.foto, concat_ws(' ', j.nama, p.nama) as prodi, b.tahun_masuk, b.tanggal_lulus 
        FROM alumni a 
        LEFT JOIN biodata_akademik b ON a.nim = b.nim_alumni 
        LEFT JOIN program_studi p ON b.id_program_studi = p.id 
        LEFT JOIN jenjang j ON p.id_jenjang = j.id
        LEFT JOIN riwayat_pekerjaan r ON a.nim = r.nim_alumni
        WHERE (a.nim LIKE '%" . $keyword . "%' OR a.nama LIKE '%" . $keyword . "%' OR a.email LIKE '%" . $keyword . "%')
        ";

        if (isset($tahun_lulus) && $tahun_lulus != 'all') {
            $query .= " AND year(b.tanggal_lulus) = '" . $tahun_lulus . "'";
        }

        if (isset($jenjang) && $jenjang != 'all') {
            $query .= " AND j.id = '" . $jenjang . "'";
        }

        if (isset($prodi) && $prodi != 'all') {
            $query .= " AND p.id = '" . $prodi . "'";
        }

        if (isset($status_kerja) && $status_kerja != 'all') { }

        if (isset($status_upload_foto) && $status_upload_foto != 'all') {
            if ($status_upload_foto == 'sudah') {
                $query .= " AND a.foto != ''";
            } else {
                $query .= " AND a.foto IS NULL";
            }
        }

        $query .= " GROUP BY a.nim";

        if (isset($status_kerja) && $status_kerja != 'all') {
            if ($status_kerja == 'sudah') {
                $query .= " HAVING COUNT(r.id) > 0";
            } else {
                $query .= " HAVING COUNT(r.id) = 0";
            }
        }

        return $query;
    }

    public function count_all($keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto)
    {
        $query = $this->make_query($keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto);
        $data = $this->db->query($query);
        return $data->num_rows();
    }

    public function fetch_data($limit, $start, $keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto)
    {
        $query = $this->make_query($keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto);
        $query .= ' LIMIT ' . $start . ', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $output .= '
                <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                    <div class="card shadow-none" style="background-color: #F4FAFB;">
                        <div class="card-body">
                ';
                if ($row['foto'] == '') {
                    $output .= '
                            <img class="img-fluid rounded mx-auto d-block" src="' . base_url() . 'assets/img/alumni/no-image.jpg" alt="Foto" style="width: 40%">
                    ';
                } else {
                    $output .= '
                            <img class="img-fluid rounded mx-auto d-block" src="' . base_url() . 'assets/img/alumni/' . $row['foto'] . '" alt="Foto" style="width: 40%">
                    ';
                }
                $output .= '
                            <div class="lh-sm mt-2">
                            NIM : ' . $row['nim'] . ' <br>
                            Nama : ' . $row['nama'] . ' <br>
                            Prodi : ' . $row['prodi'] . ' <br>
                            Tahun Masuk : ' . $row['tahun_masuk'] . ' <br>
                            Tgl Lulus : ' . $row['tanggal_lulus'] . '
                            </div>
                            <div class="d-md-flex justify-content-md-end mt-2">
                                <a href="' . base_url() . 'mahasiswa/alumni/detail/' . $row['nim'] . '" class="btn btn-warning btn-sm" style="color: white">
                                    <i class="mdi mdi-dots-horizontal-circle-outline"></i> Lihat Detail
                                </a>
                            </div>                                                        
                        </div>
                    </div>
                </div>
                ';
            }
        } else {
            $output = '<h3 style="text-align: center">No Data Found</h3>';
        }
        return $output;
    }

    public function fetch_data_landing_page($limit, $start, $keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto)
    {
        $query = $this->make_query($keyword, $tahun_lulus, $jenjang, $prodi, $status_kerja, $status_upload_foto);
        $query .= ' LIMIT ' . $start . ', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $output .= '
                <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                    <div class="item">
                        <div class="gallery-item">
                            <div class="card">
                                <div class="card-images">
                ';
                if ($row['foto'] == '') {
                    $output .= '                            
                                    <img class="img-fluid rounded mx-auto d-block" src="' . base_url() . 'assets/img/alumni/no-image.jpg">
                    ';
                } else {
                    $output .= '
                                    <img class="img-fluid rounded mx-auto d-block" src="' . base_url() . 'assets/img/alumni/' . $row['foto'] . '">
                    ';
                }
                $output .= '
                                </div>
                                <div class="card-body">
                                    <div class="responsive-table">
                                        <table class="table table-one">
                                            <tbody>
                                                <tr>
                                                    <td class="fs-secondary text-grey-light">NIM </td>
                                                    <td class="fs-secondary pull-left text-brand"><span>:</span>&nbsp;' . $row['nim'] . '</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-secondary text-grey-light">Nama </td>
                                                    <td class="fs-secondary pull-left text-grey-dark"><span>:</span>&nbsp;' . $row['nama'] . '</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-secondary text-grey-light">Prodi </td>
                                                    <td class="fs-secondary pull-left text-grey-dark "><span>:</span>&nbsp;' . $row['prodi'] . 's</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-secondary text-grey-light">Tahun Masuk</td>
                                                    <td class="fs-secondary pull-left text-grey-dark"><span>:</span>&nbsp;' . $row['tahun_masuk'] . '</td>
                                                </tr>
                                                <tr>
                                                    <td class="fs-secondary text-grey-light">Tgl Lulus</td>
                                                    <td class="fs-secondary pull-left text-grey-dark"><span>:</span>&nbsp;' . $row['tanggal_lulus'] . '</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="' . base_url() . 'landingpage/detailalumni/' . '" class="btn fs-secondary button-primary-custom p btn-sm float-end"><span class="mdi mdi-information-outline"></span>&nbsp;Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        } else {
            $output = '<h3 style="text-align: center">No Data Found</h3>';
        }
        return $output;
    }

    public function fetch_by_nim($nim)
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->where('nim', $nim);

        $query = $this->db->get();
        return $query->result();
    }

    public function check_by_nim($nim)
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->where('nim', $nim);

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function fetch_by_username($username)
    {
        $this->db->select('*');
        $this->db->from('alumni');
        $this->db->where('username', $username);

        $query = $this->db->get();
        return $query->result();
    }

    public function detail_by_nim($nim)
    {
        $this->db->select("
        a.nim, a.nama, a.jenis_kelamin, a.tempat_lahir, a.tanggal_lahir, a.agama, a.email, a.no_hp, 
        a.facebook, a.linkedin, a.foto, a.alamat, a.rt, a.rw, a.kelurahan_desa, a.kecamatan, 
        k.nama kabupaten, pr.nama provinsi, b.tahun_masuk, b.tanggal_lulus, b.ipk, b.no_transkrip, 
        b.no_ijazah, concat_ws(' ', j.nama, p.nama) as prodi, b.judul_ta 
        ");
        $this->db->from('alumni a');
        $this->db->join('biodata_akademik b', 'a.nim = b.nim_alumni', 'left');
        $this->db->join('program_studi p', 'b.id_program_studi = p.id', 'left');
        $this->db->join('jenjang j', 'p.id_jenjang = j.id', 'left');
        $this->db->join('provinsi pr', 'a.id_provinsi = pr.id', 'left');
        $this->db->join('kabupaten k', 'a.id_kabupaten = k.id', 'left');
        $this->db->where('a.nim', $nim);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_nama_alumni($nim)
    {
        $query = "SELECT nama FROM alumni WHERE nim = '" . $nim . "'";
        $data = $this->db->query($query);
        $name = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $name = $row['nama'];
            }
        }
        return $name;
    }

    public function detail_alumni($nim)
    {
        // select a.nama, a.tempat_lahir, a.tanggal_lahir, a.agama, a.no_hp, a.email, a.alamat, a.rt, 
        // a.rw, a.kelurahan_desa, a.kecamatan, a.id_kabupaten, a.id_provinsi, a.kode_pos, a.foto, 
        // r.jenis_pekerjaan, r.nama, r.jabatan, r.tgl_masuk, r.telepon, r.alamat, r.pendapatan from 
        // alumni a left join riwayat_pekerjaan r on a.nim=r.nim_alumni where a.nim = 1631120122;
        $this->db->select('a.nama nama_alumni, a.tempat_lahir, a.tanggal_lahir, a.jenis_kelamin, a.agama, 
            a.no_hp, a.email, a.alamat alamat_alumni, a.rt, a.rw, a.kelurahan_desa, a.kecamatan, 
            k.nama kabupaten, p.nama provinsi, a.kode_pos, a.foto, r.jenis_pekerjaan, r.nama nama_kantor, 
            r.jabatan, r.tgl_masuk, r.telepon, r.alamat alamat_kantor, r.pendapatan');
        $this->db->from('alumni a');
        $this->db->join('riwayat_pekerjaan r', 'a.nim = r.nim_alumni', 'left');
        $this->db->join('kabupaten k', 'a.id_kabupaten = k.id', 'left');
        $this->db->join('provinsi p', 'a.id_provinsi = p.id', 'left');
        $this->db->where('a.nim', $nim);
        $query = $this->db->get();

        $output = '';
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                if ($row['foto']) {
                    $output .= '
                    <div class="row">
                        <div class="col-6">
                            <div class="responsive-table">
                                <table class="table table-one">
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="text-center">Detail Biodata</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Tempat Lahir :</td>
                                        <td class="pull-left text-grey-dark">' . $row['tempat_lahir'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Tanggal Lahir :</td>
                                        <td class="pull-left text-grey-dark">' . $row['tanggal_lahir'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Jenis Kelamin :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['jenis_kelamin'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Agama :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['agama'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">No Telepon :</td>
                                        <td class="pull-left text-grey-dark">' . $row['no_hp'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Email :</td>
                                        <td class="pull-left text-grey-dark">' . $row['email'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Alamat Rumah :</td>
                                        <td class="pull-left text-grey-dark">' . $row['alamat_alumni'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">RT :</td>
                                        <td class="pull-left text-grey-dark">' . $row['rt'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">RW :</td>
                                        <td class="pull-left text-grey-dark">' . $row['rw'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kelurahan/Desa :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kelurahan_desa'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kecamatan :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kecamatan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kabupaten/Kota :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kabupaten'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Provinsi :</td>
                                        <td class="pull-left text-grey-dark">' . $row['provinsi'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kode pos :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kode_pos'] . '</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="responsive-table">
                                <table class="table table-one">
                                    <tr>
                                        <td colspan="2" class="text-center">     
                                            <img src="' . base_url() . 'assets/img/alumni/' . $row['foto'] . '" class="img-avatar" style="margin-bottom:1.5em;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="text-center">Pekerjaan Terakhir</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Jenis Pekerjaan :</td>
                                        <td class="pull-left text-grey-dark">' . $row['jenis_pekerjaan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Nama Kantor :</td>
                                        <td class="pull-left text-grey-dark">' . $row['nama_kantor'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Jabatan :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['jabatan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Tanggal Mulai Kerja :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['tgl_masuk'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">No Telepon :</td>
                                        <td class="pull-left text-grey-dark">' . $row['telepon'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Alamat :</td>
                                        <td class="pull-left text-grey-dark">' . $row['alamat_kantor'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Pendapatan/Bulan :</td>
                                        <td class="pull-left text-grey-dark">' . $row['pendapatan'] . '</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    ';
                } else {
                    $output .= '
                    <div class="row">
                        <div class="col-6">
                            <div class="responsive-table">
                                <table class="table table-one">
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="text-center">Detail Biodata</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Tempat Lahir :</td>
                                        <td class="pull-left text-grey-dark">' . $row['tempat_lahir'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Tanggal Lahir :</td>
                                        <td class="pull-left text-grey-dark">' . $row['tanggal_lahir'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Jenis Kelamin :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['jenis_kelamin'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Agama :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['agama'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">No Telepon :</td>
                                        <td class="pull-left text-grey-dark">' . $row['no_hp'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Email :</td>
                                        <td class="pull-left text-grey-dark">' . $row['email'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Alamat Rumah :</td>
                                        <td class="pull-left text-grey-dark">' . $row['alamat_alumni'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">RT :</td>
                                        <td class="pull-left text-grey-dark">' . $row['rt'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">RW :</td>
                                        <td class="pull-left text-grey-dark">' . $row['rw'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kelurahan/Desa :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kelurahan_desa'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kecamatan :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kecamatan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kabupaten/Kota :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kabupaten'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Provinsi :</td>
                                        <td class="pull-left text-grey-dark">' . $row['provinsi'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Kode pos :</td>
                                        <td class="pull-left text-grey-dark">' . $row['kode_pos'] . '</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="responsive-table">
                                <table class="table table-one">
                                    <tr>
                                        <td colspan="2" class="text-center">       
                                        <img src="' . base_url() . 'assets/img/alumni/no-image.jpg" class="img-avatar" style="margin-bottom:1.5em;">                                                                 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="text-center">Pekerjaan Terakhir</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Jenis Pekerjaan :</td>
                                        <td class="pull-left text-grey-dark">' . $row['jenis_pekerjaan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Nama Kantor :</td>
                                        <td class="pull-left text-grey-dark">' . $row['nama_kantor'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Jabatan :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['jabatan'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Tanggal Mulai Kerja :</td>
                                        <td class="pull-left text-grey-dark ">' . $row['tgl_masuk'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">No Telepon :</td>
                                        <td class="pull-left text-grey-dark">' . $row['telepon'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Alamat :</td>
                                        <td class="pull-left text-grey-dark">' . $row['alamat_kantor'] . '</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right text-grey">Pendapatan/Bulan :</td>
                                        <td class="pull-left text-grey-dark">' . $row['pendapatan'] . '</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
        } else {
            $output = '<h3 class="text-center">Data tidak ditemukan</h3>';
        }
        return $output;
    }

    public function add($data)
    {
        $this->db->insert('alumni', $data);
    }

    public function update($nim, $data)
    {
        $this->db->where('nim', $nim);
        $this->db->update('alumni', $data);
    }

    public function delete($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('alumni');
    }
}
