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


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <h1 class="m-0 text-dark">Biodata</h1>
                                        <ol class="breadcrumb ">
                                            <!-- <li class="breadcrumb-item"><a href="#">Biodata</a></li> -->
                                            <li class="breadcrumb-item active">Biodata</li>
                                        </ol>
                                    </div>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse ms-5" id="navbarSearch">

                                    <div class="d-flex ms-md-auto">
                                        </a>
                                        <!-- <a class="btn btn-outline-danger me-2 btn-sm" href="<?= base_url() ?>mahasiswa/wisuda">
                                            <div class="row">
                                                <div class="col">
                                                    <i class="mdi mdi-school-outline fs-5" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-8 text-wrap" style="width: 5rem;line-height: normal;">
                                                    Wisuda<br>Saya
                                                </div>
                                            </div>
                                        </a> -->
                                        <a class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3" href="<?= base_url() ?>mahasiswa/biodata/riwayatpekerjaan">
                                            <img src="<?= base_url() ?>assets/img/icobag.png" width="25" class="mt-2 me-2">
                                            <span class="float-end">Riwayat<br>Pekerjaan</span>
                                        </a>
                                        <a class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2" href="#">
                                            <img src="<?= base_url() ?>assets/img/icoprint.png" width="25" class="mt-2 me-2">
                                            <span class="float-end">Cetak<br>Data</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="row">
                        <?php foreach ($alumni as $row) { ?>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h3><?= ucwords(strtolower($row->nama)) ?></h3>
                                            </div>
                                            <div class="col">
                                                <div class="row justify-content-end">
                                                    <div class="col-md-5">
                                                        <?php if ($row->foto != '') { ?>
                                                            <img class="img-thumbnail" src="<?= base_url() ?>assets/img/alumni/<?= $row->foto ?>" alt="Foto"><br>
                                                        <?php } else { ?>
                                                            <img class="img-thumbnail" src="<?= base_url() ?>assets/img/alumni/no-image.jpg" alt="Foto"><br>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <h5 class="color-primary">Biodata Pribadi</h5>
                                            </div>
                                            <div class="col text-right">
                                                <a class="btn button-secondary-custom" href="<?= base_url() ?>mahasiswa/biodata/edit/<?= $row->nim ?>">
                                                    <span class="mdi mdi-account-edit-outline">
                                                        Ubah
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <table class="table table-borderless table-sm">
                                                <tr>
                                                    <td class="color-grey-light" style="width: 30%">Nim</td>
                                                    <td class="color-dark-grey">:</td>
                                                    <td class="color-dark-grey"><?= $row->nim ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Nama</td>
                                                    <td>:</td>
                                                    <td><?= ucwords(strtolower($row->nama)) ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Agama</td>
                                                    <td>:</td>
                                                    <td><?= $row->agama ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Jenis Kelamin</td>
                                                    <td>:</td>
                                                    <td><?= $row->jenis_kelamin ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Tempat Lahir</td>
                                                    <td>:</td>
                                                    <td><?= $row->tempat_lahir ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Tanggal Lahir</td>
                                                    <td>:</td>
                                                    <td><?= $row->tanggal_lahir ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">No HP</td>
                                                    <td>:</td>
                                                    <td><?= $row->no_hp ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Email</td>
                                                    <td>:</td>
                                                    <td><?= $row->email ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="color-grey-light">Alamat Rumah</td>
                                                    <td>:</td>
                                                    <td><?= $row->alamat ?> RT <?= $row->rt ?> / RW <?= $row->rw ?> <?= $row->kelurahan_desa ?> <?= $row->kecamatan ?> <?= $row->kabupaten ?> <?= $row->provinsi ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="ms-2 color-primary">Biodata Akademik</h5>
                                                <table class="table table-borderless table-sm mt-3">
                                                    <tr>
                                                        <td class="color-grey-light" style="width: 25%">Program Studi</td>
                                                        <td>:</td>
                                                        <td><?= $row->prodi ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-grey-light">Tahun Masuk</td>
                                                        <td>:</td>
                                                        <td><?= $row->tahun_masuk ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-grey-light">Tanggal Lulus</td>
                                                        <td>:</td>
                                                        <td><?= $row->tanggal_lulus ?> <b>(Data Siakad)</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-grey-light">IPK</td>
                                                        <td>:</td>
                                                        <td><?= $row->ipk ?> <b>(Data Siakad)</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-grey-light">No Transkrip</td>
                                                        <td>:</td>
                                                        <td><?= $row->no_transkrip ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-grey-light">No Ijazah</td>
                                                        <td>:</td>
                                                        <td><?= $row->no_ijazah ?> <b>(Data Siakad)</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="color-grey-light">Judul Tugas Akhir</td>
                                                        <td>:</td>
                                                        <td><?= $row->judul_ta ?> <b>(Data Siakad)</b></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <h5 class="color-primary">Pekerjaan Terakhir</h5>
                                                    </div>
                                                    <div class="col text-right">

                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <?php if (count($pekerjaan) > 0) { ?>
                                                        <?php foreach ($pekerjaan as $data_pekerjaan) { ?>
                                                            <table class="table table-borderless table-sm">
                                                                <tr>
                                                                    <td class="color-grey-light">Jenis Pekerjaan</td>
                                                                    <td>:</td>
                                                                    <td><?= $data_pekerjaan->jenis_pekerjaan ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="color-grey-light">Nama Kantor</td>
                                                                    <td>:</td>
                                                                    <td><?= $data_pekerjaan->nama ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="color-grey-light">Jabatan</td>
                                                                    <td>:</td>
                                                                    <td><?= $data_pekerjaan->jabatan ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="color-grey-light">Tanggal Mulai Kerja</td>
                                                                    <td>:</td>
                                                                    <td><?= $data_pekerjaan->tgl_masuk ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="color-grey-light">No Telepon</td>
                                                                    <td>:</td>
                                                                    <td><?= $data_pekerjaan->telepon ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="color-grey-light">Alamat</td>
                                                                    <td>:</td>
                                                                    <td><?= $data_pekerjaan->alamat ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="color-grey-light">Pendapatan/Bulan</td>
                                                                    <td>:</td>
                                                                    <td>Rp. <?= $data_pekerjaan->pendapatan ?></td>
                                                                </tr>
                                                            </table>
                                                        <?php } ?>
                                                    <?php } else { ?>
                                                        <table class="table table-borderless table-sm">
                                                            <tr>
                                                                <td class="color-grey-light" style="width: 30%">Jenis Pekerjaan</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="color-grey-light">Nama Kantor</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="color-grey-light">Jabatan</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="color-grey-light">Tanggal Mulai Kerja</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="color-grey-light">No Telepon</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="color-grey-light">Alamat</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="color-grey-light">Pendapatan/Bulan</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Script -->
        <?php $this->load->view('template/script_dashboard') ?>

        <!-- Menu Toggle Script -->
        <script>
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
        </script>
</body>

</html>