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
                    <!-- biodata navbar and search -->
                    <div class="row row-dashboard">
                        <div class="col-md-4 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Wisudawan</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">wisudawan</span>
                            </div>
                        </div>
                    </div>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard wisuda-admin mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row row-dashboard">
                                        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                                            <div class="container-fluid">
                                                <button class="navbar-toggler pt-2" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="filter" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="mdi mdi-filter-variant"></span>
                                                </button>
                                                <div class="collapse navbar-collapse ms-5">
                                                    <div class="d-flex ms-md-auto">
                                                        <a class="btn btn-outline-dark me-2 btn-sm px-3 btn-filter" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="filter" aria-expanded="false" aria-label="Toggle navigation">
                                                            <i class="mdi mdi-filter-variant" aria-hidden="true"></i> FILTER
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="row row-dashboard2 collapse px-3" id="filter">
                                        <div class="col-md-5">
                                            <div class="text-muted">NIM / Nama</div>
                                            <input type="text" class="form-control mt-1" id="keyword" style="background-color: #f8f8f8">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-muted">Program Studi</div>
                                            <select class="form-select mt-1" id="prodi" style="background-color: #f8f8f8">
                                                <option value="all">Semua</option>
                                                <?php foreach ($prodi as $row) { ?>
                                                    <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                                                <?php } ?>
                                                <!-- <option value="D4 Keuangan">D4 Keuangan</option>                             -->
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-muted">Jenis Wisuda</div>
                                            <select class="form-select mt-1" id="status_kerja" style="background-color: #f8f8f8">
                                                <option value="all">Semua</option>
                                                <option value="sudah">Wisuda Luring</option>
                                                <option value="belum">Wisuda Daring</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <table id="example1" class="table table-striped table-borderless table-alumni" width="100%">
                                                <thead class=" fw-bolder">
                                                    <tr>
                                                        <td class="align-middle">NIM</td>
                                                        <td class="align-middle">Nama Wisudawan</td>
                                                        <td class="align-middle">Prodi</td>
                                                        <td class="text-wrap align-middle">Pilihan</td>
                                                        <td class="text-wrap align-middle text-center">Status Jenis Wisuda</td>
                                                        <td class="text-wrap align-middle text-center">Jadwal</td>
                                                        <td class="text-wrap align-middle text-center">Dokumen</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#">1731710161</a></td>
                                                        <td>Ferina Bayu Sukmadewi</td>
                                                        <td>D3 Manajemen Informatika</td>
                                                        <td>Wisuda Luring</td>
                                                        <td>
                                                            <select class="form-select" id="status_pendaftaran" name="status_pendaftaran" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="wisudaluring">Wisuda Luring</option>
                                                                <option value="wisudadaring">Wisuda Daring</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-select" id="gelwisuda" name="gelwisuda" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="setujui">2020 Gel. 1 Sesi 1</option>
                                                                <option value="tolak">2020 Gel. 1 Sesi 2</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm show-modal text-light"><span class="text-info">Lihat Detail</span></a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm button-primary-custom ps-2 pe-2 pt-1 pb-1 show-modal text-light">Simpan</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1731710161</td>
                                                        <td>Ferina Bayu Sukmadewi</td>
                                                        <td>D3 Manajemen Informatika</td>
                                                        <td>Wisuda Daring</td>
                                                        <td>
                                                            <select class="form-select" id="status_pendaftaran" name="status_pendaftaran" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="setujui">Setujui</option>
                                                                <option value="tolak">Tolak</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-select" id="gelwisuda" name="gelwisuda" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="setujui">2020 Gel. 1 Sesi 1</option>
                                                                <option value="tolak">2020 Gel. 1 Sesi 2</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm show-modal text-light"><span class="text-info">-</span></a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm button-primary-custom ps-2 pe-2 pt-1 pb-1 show-modal text-light">Simpan</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">1731710161</a></td>
                                                        <td>Ferina Bayu Sukmadewi</td>
                                                        <td>D3 Manajemen Informatika</td>
                                                        <td>Wisuda Luring</td>
                                                        <td>
                                                            <select class="form-select" id="status_pendaftaran" name="status_pendaftaran" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="setujui">Setujui</option>
                                                                <option value="tolak">Tolak</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-select" id="gelwisuda" name="gelwisuda" required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="setujui">2020 Gel. 1 Sesi 1</option>
                                                                <option value="tolak">2020 Gel. 1 Sesi 2</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm show-modal text-light"><span class="text-info">Lihat Detail</span></a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-sm button-primary-custom ps-2 pe-2 pt-1 pb-1 show-modal text-light">Simpan</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

    <!-- Menu Toggle Script -->
    <script>
        var toggle = false
        var detailId = 0
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
        $(function() {
            // $("#example1").DataTable();
            $("#example1").DataTable({
                "columnDefs": [{
                        "width": "16%",
                        "targets": 0
                    },
                    {
                        "width": "26%",
                        "targets": 1
                    },
                    {
                        "width": "13%",
                        "targets": 2
                    },
                    {
                        "width": "11%",
                        "targets": 7
                    }
                ]
            });
        });
    </script>
</body>

</html>