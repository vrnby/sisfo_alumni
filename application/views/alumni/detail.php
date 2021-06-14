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

            <section class="content">
                <div class="container-fluid">
                    <div class="row row-dashboard">
                        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <div class="row">
                                        <div class="fw-bolder fs-2">Data Alumni</div>
                                    </div>
                                    <div class="row">
                                        <span class="text-muted fs-6">Data Alumni / Detail Data Alumni</span>
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>

                    <div class="row row-dashboard2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="ms-1 text-info mb-3">Data Alumi</h5>
                                        </div>
                                    </div>
                                    <?php foreach ($alumni as $row) { ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <?php if ($row->foto != '') { ?>
                                                    <img class="img-fluid mx-auto d-block p-4" src="<?= base_url() ?>assets/img/alumni/<?= $row->foto ?>" alt="Foto" style="background-color : #F4F3F3">
                                                <?php } else { ?>
                                                    <img class="img-fluid mx-auto d-block p-4" src="<?= base_url() ?>assets/img/alumni/no-image.jpg" alt="Foto" style="background-color : #F4F3F3">
                                                <?php } ?>
                                            </div>
                                            <div class="col-md-9 ms-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="ms-1 fw-bold"><?= ucwords(strtolower($row->nama)) ?></h5>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <p class="ms-1 fs-6 fw-bold">Biodata Akademik</p>

                                                        <table class="table table-borderless table-sm">
                                                            <tr>
                                                                <td style="width:30%">NIM</td>
                                                                <td>:</td>
                                                                <td><?= $row->nim ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Program Studi</td>
                                                                <td>:</td>
                                                                <td><?= $row->prodi ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tahun Masuk</td>
                                                                <td>:</td>
                                                                <td><?= $row->tahun_masuk ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tgl Lulus</td>
                                                                <td>:</td>
                                                                <td><?= $row->tanggal_lulus ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tugas Akhir</td>
                                                                <td>:</td>
                                                                <td><?= $row->judul_ta ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>IPK</td>
                                                                <td>:</td>
                                                                <td><?= $row->ipk ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No.Ijazah</td>
                                                                <td>:</td>
                                                                <td><?= $row->no_ijazah ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No. Transkrip</td>
                                                                <td>:</td>
                                                                <td><?= $row->no_transkrip ?></td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="ms-1 fs-6 fw-bold">Biodata Pribadi</p>
                                                        <table class="table table-borderless table-sm">
                                                            <tr>
                                                                <td style="width:30%">Tempat Lahir</td>
                                                                <td>:</td>
                                                                <td><?= $row->tempat_lahir ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Lahir</td>
                                                                <td>:</td>
                                                                <td><?= $row->tanggal_lahir ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td><?= $row->jenis_kelamin ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Agama</td>
                                                                <td>:</td>
                                                                <td><?= $row->agama ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Rumah</td>
                                                                <td>:</td>
                                                                <td><?= $row->alamat ?> RT <?= $row->rt ?> / RW <?= $row->rw ?> <?= $row->kelurahan_desa ?> <?= $row->kecamatan ?> <?= $row->kabupaten ?> <?= $row->provinsi ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>:</td>
                                                                <td><?= $row->email ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Facebook</td>
                                                                <td>:</td>
                                                                <td><?= $row->facebook ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>LinkedIn</td>
                                                                <td>:</td>
                                                                <td><?= $row->linkedin ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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