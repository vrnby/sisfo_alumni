<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_dashboard') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed alumni-auth" style="background: #f8f8f8">
    <div class="wrapper">
        <?php $this->load->view('template/navbar_dashboard') ?>
        <?php $this->load->view('template/sidebar_dashboard') ?>


        <div class="content-wrapper">

            <section class="content table-full">
                <div class="container-fluid">
                    <?php if (isset($this->session->status_add_alumni) && $this->session->status_add_alumni == "success") { ?>
                        <?php unset($_SESSION['status_add_alumni']); ?>
                        <div class="row row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Data alumni berhasil ditambahkan.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_delete_alumni) && $this->session->status_delete_alumni == "success") { ?>
                        <?php unset($_SESSION['status_delete_alumni']); ?>
                        <div class="row row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Data alumni berhasil dihapus.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_update_alumni) && $this->session->status_update_alumni == "success") { ?>
                        <?php unset($_SESSION['status_update_alumni']); ?>
                        <div class="row row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Data alumni berhasil diupdate.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <div class="row row-dashboard2">
                        <div class="card">
                            <div class="card-header">
                                <div class="row justify-content-between">
                                    <div class="col-4">
                                        <h3 class="card-title mt-2">Data Alumni</h3>                                        
                                    </div>
                                    <div class="col-4 text-right">
                                        <a class="btn btn-primary add-alumni text-light"><span class="mdi mdi-account-edit-outline"> Tambah</span></a>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-striped table-alumni">
                                            <thead>
                                                <tr>
                                                    <th>NIM</th>
                                                    <th>Nama</th>
                                                    <th>Prodi</th>
                                                    <th>Tahun Masuk</th>
                                                    <th>Tanggal Lulus</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($alumni as $row) { ?>
                                                    <tr>
                                                        <td><?= $row->nim ?></td>
                                                        <td class="nama-alumni"><?= ucwords(strtolower($row->nama)) ?></td>
                                                        <td><?= $row->prodi ?></td>
                                                        <td><?= $row->tahun_masuk ?></td>
                                                        <td><?= $row->tanggal_lulus ?></td>
                                                        <td>
                                                            <a class="btn btn-info show-modal text-light" data-nim="<?= $row->nim ?>"><span class="mdi mdi-account-details-outline"> Detail</span></a>
                                                            <!-- <a href="<?= base_url() ?>admin/alumni/edit/<?= $row->nim ?>" class="btn btn-primary"><span class="mdi mdi-account-edit-outline"> Edit</span></a> -->
                                                            <a class="btn btn-primary update-alumni text-light" data-nim="<?= $row->nim ?>"><span class="mdi mdi-account-edit-outline"> Edit</span></a>
                                                            <a class="btn btn-danger delete-alumni text-light" data-nim="<?= $row->nim ?>"><span class="mdi mdi-account-remove-outline"> Hapus</span></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- /#page-content-wrapper -->
                        </div>
                        <!-- /#wrapper -->

                        <!-- Modal detail alumni -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-detail-alumni modal-lg ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title title-alumni" id="exampleModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body detail-alumni">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal add alumni -->
                        <div class="modal fade" id="addAlumni" tabindex="-1" aria-labelledby="addAlumniLabel" aria-hidden="true">
                            <div class="modal-dialog modal-detail-alumni modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Alumni</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url() ?>alumni/add" method="POST" class="needs-validation" novalidate>
                                        <!-- <form class="needs-validation" novalidate> -->
                                        <div class="modal-body">
                                            <nav>
                                                <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Personal Data</a>
                                                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Alamat</a>
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Info Kontak</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane m-2 fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="nim" class="form-label">Program Studi</label>
                                                            <select class="form-select" id="prodi" name="prodi" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <?php foreach ($prodi as $row) {
                                                                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih Program Studi Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <label for="nim" class="form-label">NIM</label>
                                                            <input type="text" class="form-control" id="nim" name="nim" placeholder="173171xxxx" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan NIM Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="nim" class="form-label">Tahun Masuk</label>
                                                            <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk" placeholder="2017" value="<?= date("Y") ?>" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan Tahun Masuk Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan nama Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="agama" class="form-label">Agama</label>
                                                            <select class="form-select" id="agama" name="agama" required>
                                                                <option value="Islam" selected>Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih agama Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih jenis kelamin Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                                                            <div class="invalid-feedback">
                                                                Masukan tempat lahir Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                                            <div class="invalid-feedback">
                                                                Pilih tanggal lahir Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane m-2 fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Merdeka Gang 8 No. 90" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan alamat Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="rt" class="form-label">RT</label>
                                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="01" required>
                                                            <div class="invalid-feedback">
                                                                Masukan RT Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="rw" class="form-label">RW</label>
                                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="02" required>
                                                            <div class="invalid-feedback">
                                                                Masukan RW Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="kel_desa" class="form-label">Kelurahan/Desa</label>
                                                            <input type="text" class="form-control" id="kel_desa" name="kel_desa" placeholder="Jepun" required>
                                                            <div class="invalid-feedback">
                                                                Masukan kelurahan/desa Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Tulungagung" required>
                                                            <div class="invalid-feedback">
                                                                Masukan kecamatan Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="provinsi" class="form-label">Provinsi</label>
                                                            <select class="form-select" id="provinsi" name="provinsi" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <?php foreach ($provinsi as $row) {
                                                                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                                } ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih provinsi Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="kabupaten" class="form-label">Kabupaten</label>
                                                            <select class="form-select" id="kabupaten" name="kabupaten" required>
                                                                <option selected disabled value="">Choose...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih kabupaten Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane m-2 fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="no_hp" class="form-label">No Hp</label>
                                                            <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxx">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="xxx@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="facebook" class="form-label">Facebook</label>
                                                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="www.facebook/xxxxx">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="linkedin" class="form-label">LinkedIn</label>
                                                            <input type="text" class="form-control" id="linkedin" name="linkedid" placeholder="www.linkedin.com/in/xxxx">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success me-1" type="submit"><span class="mdi mdi-content-save-outline"> Simpan</span></button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="mdi mdi-close"> Batal</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal update alumni -->
                        <div class="modal fade" id="updateAlumni" tabindex="-1" aria-labelledby="addAlumniLabel" aria-hidden="true">
                            <div class="modal-dialog modal-detail-alumni modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Alumni</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url() ?>alumni/update" method="POST" class="needs-validation" novalidate>
                                        <!-- <form class="needs-validation" novalidate> -->
                                        <div class="modal-body">
                                            <nav>
                                                <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#update_pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Personal Data</a>
                                                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#update_pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Alamat</a>
                                                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#update_pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Info Kontak</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane m-2 fade show active" id="update_pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="update_prodi" class="form-label">Program Studi</label>
                                                            <select class="form-select" id="update_prodi" name="prodi" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <?php foreach ($prodi as $row) {
                                                                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih Program Studi Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <label for="update_nim_display" class="form-label">NIM</label>
                                                            <input type="text" class="form-control" id="update_nim" name="nim_alumni" placeholder="173171xxxx" readonly>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="update_tahun_masuk" class="form-label">Tahun Masuk</label>
                                                            <input type="number" class="form-control" id="update_tahun_masuk" name="tahun_masuk" placeholder="2017" value="<?= date("Y") ?>" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan Tahun Masuk Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_nama" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" id="update_nama" name="nama" placeholder="Nama" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan nama Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_agama" class="form-label">Agama</label>
                                                            <select class="form-select" id="update_agama" name="agama" required>
                                                                <option value="Islam" selected>Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih agama Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="update_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                            <select class="form-select" id="update_jenis_kelamin" name="jenis_kelamin" required>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih jenis kelamin Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_tempat_lahir" class="form-label">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="update_tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                                                            <div class="invalid-feedback">
                                                                Masukan tempat lahir Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="update_tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="update_tanggal_lahir" name="tanggal_lahir" required>
                                                            <div class="invalid-feedback">
                                                                Pilih tanggal lahir Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane m-2 fade" id="update_pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="update_alamat" class="form-label">Alamat</label>
                                                            <input type="text" class="form-control" id="update_alamat" name="alamat" placeholder="Jl. Merdeka Gang 8 No. 90" required>
                                                            <div class="invalid-feedback">
                                                                Masukkan alamat Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_rt" class="form-label">RT</label>
                                                            <input type="text" class="form-control" id="update_rt" name="rt" placeholder="01" required>
                                                            <div class="invalid-feedback">
                                                                Masukan RT Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="update_rw" class="form-label">RW</label>
                                                            <input type="text" class="form-control" id="update_rw" name="rw" placeholder="02" required>
                                                            <div class="invalid-feedback">
                                                                Masukan RW Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_kel_desa" class="form-label">Kelurahan/Desa</label>
                                                            <input type="text" class="form-control" id="update_kel_desa" name="kel_desa" placeholder="Jepun" required>
                                                            <div class="invalid-feedback">
                                                                Masukan kelurahan/desa Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="update_kecamatan" class="form-label">Kecamatan</label>
                                                            <input type="text" class="form-control" id="update_kecamatan" name="kecamatan" placeholder="Tulungagung" required>
                                                            <div class="invalid-feedback">
                                                                Masukan kecamatan Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_provinsi" class="form-label">Provinsi</label>
                                                            <select class="form-select" id="update_provinsi" name="provinsi" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <?php foreach ($provinsi as $row) {
                                                                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                                } ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih provinsi Anda!
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="update_kabupaten" class="form-label">Kabupaten</label>
                                                            <select class="form-select" id="update_kabupaten" name="kabupaten" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <?php foreach ($kabupaten as $row) {
                                                                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                                } ?>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Pilih kabupaten Anda!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane m-2 fade" id="update_pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="update_no_hp" class="form-label">No Hp</label>
                                                            <input type="number" class="form-control" id="update_no_hp" name="no_hp" placeholder="08xxxxxxx">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="update_email" name="email" placeholder="xxx@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_facebook" class="form-label">Facebook</label>
                                                            <input type="text" class="form-control" id="update_facebook" name="facebook" placeholder="www.facebook/xxxxx">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="update_linkedin" class="form-label">LinkedIn</label>
                                                            <input type="text" class="form-control" id="update_linkedin" name="linkedid" placeholder="www.linkedin.com/in/xxxx">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success me-1" type="submit"><span class="mdi mdi-checkbox-marked-circle-outline"> Update</span></button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="mdi mdi-close"> Batal</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>



    <!-- Script -->
    <?php $this->load->view('template/script_dashboard') ?>
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>assets/js/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datatables-bs4/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/js/adminlte.min.js"></script>
    <!-- Menu Toggle Script -->

    <script>
        $(document).ready(function() {
            // form validation start
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                                alert('Ada data yang tidak sesuai! Coba cek datanya lagi.')
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
            // form validation end

            var base_url = "<?= base_url() ?>"
            var toggle = false
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                // $("#wrapper").toggleClass("toggled")
                toggle = !toggle
                if (toggle) {
                    var margin = 0 - parseInt($("#sidebar-wrapper").css('width')) + 'px'
                    $("#sidebar-wrapper").css('margin-left', margin)
                    $("#sidebar-wrapper").css('transition', 'margin-left .4s')
                } else {
                    $("#sidebar-wrapper").css('margin-left', '0')
                    $("#sidebar-wrapper").css('transition', 'margin-left .4s')
                }
            });

            $("#example1").DataTable();

            function get_kabupaten(id_provinsi, id_target) {
                var provinsi = $(id_provinsi).val()
                $.ajax({
                    type: 'POST',
                    url: base_url + 'ajax/get_kabupaten/' + provinsi,
                    cache: false,
                    success: function(data) {
                        $(id_target).html(data)
                    }
                })
            }

            $(".table").on('click', '.show-modal', function() {
                $('#exampleModal').modal('show')
                var action = 'fetch_data'
                var nim = $(this).data('nim')
                $.ajax({
                    url: base_url + "admin/alumni/detail/" + nim,
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        action: action
                    },
                    success: function(data) {
                        $('.title-alumni').html(data.title)
                        $('.detail-alumni').html(data.alumni_detail)
                    },
                    error: function(jqXHR, exception) {
                        var msg = '';
                        if (jqXHR.status === 0) {
                            msg = 'Not connect.\n Verify Network.';
                        } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                        } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                        } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                        } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                        } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                        } else {
                            msg = 'Uncaught Error.\n' + jqXHR.responseText;
                        }
                        $('.modal-body').html(msg)
                    },
                })
            })

            $(".add-alumni").click(function() {
                $("#addAlumni").modal("show")
            })

            $(".table").on('click', '.update-alumni', function() {
                $('#updateAlumni').modal('show')
                var action = 'fetch_data'
                var nim = $(this).data('nim')
                $.ajax({
                    type: 'POST',
                    url: base_url + 'alumni/edit/' + nim,
                    dataType: "JSON",
                    data: {
                        action: action
                    },
                    cache: false,
                    success: function(data) {
                        console.log(data.nim)
                        $('#update_prodi option[value=' + data.id_program_studi + ']')
                            .prop('selected', true)
                        $('#update_nim').val(data.nim)
                        $('#update_tahun_masuk').val(data.tahun_masuk)
                        $('#update_nama').val(data.nama)
                        $('#update_agama').val(data.agama)
                        $('#update_jenis_kelamin').val(data.jenis_kelamin)
                        $('#update_tempat_lahir').val(data.tempat_lahir)
                        $('#update_tanggal_lahir').val(data.tanggal_lahir)
                        $('#update_alamat').val(data.alamat)
                        $('#update_rt').val(data.rt)
                        $('#update_rw').val(data.rw)
                        $('#update_kel_desa').val(data.kelurahan_desa)
                        $('#update_kecamatan').val(data.kecamatan)
                        $('#update_provinsi option[value=' + data.id_provinsi + ']')
                            .prop('selected', true)
                        $('#update_kabupaten option[value=' + data.id_kabupaten + ']')
                            .prop('selected', true)
                        $('#update_no_hp').val(data.no_hp)
                        $('#update_email').val(data.email)
                        $('#update_facebook').val(data.facebook)
                        $('#update_linkedin').val(data.linkedin)
                    }
                })
            })

            $(".table").on('click', '.delete-alumni', function() {
                var nama = $(this).closest('tr').find('.nama-alumni').text()
                var nim = $(this).data('nim')
                if (!confirm("Apakah Anda yakin menghapus data " + nama + "?")) {
                    return false;
                }
                window.location.href = base_url + "alumni/delete/" + nim
            })

            $("#provinsi").change(function() {
                get_kabupaten("#provinsi", "#kabupaten")
            })

            $("#update_provinsi").change(function() {
                get_kabupaten("#update_provinsi", "#update_kabupaten")
            })
        });
    </script>
</body>

</html>