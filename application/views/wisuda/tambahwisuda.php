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
                        <div class="col-md-12 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Tambah Jadwal Wisuda</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>admin/wisuda">Jadwal Wisuda</a> / Tambah Jadwal Wisuda</span>
                            </div>
                        </div>
                    </div>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-12">
                                            <h5 class="card-title ms-1 text-info">Tambah Jadwal Wisuda</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-2 pe-5 ps-5">
                                        <div class="col">
                                            <form action="<?=base_url()?>/wisuda/storejadwalwisuda" method="POST" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="tahungelsesi" class="form-label">Tahun, Gel, dan Sesi <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="tahungelsesi" name="tahungelsesi" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan Tahun, Gel, dan Sesi !
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="nama" class="form-label">Nama Wisuda <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama Wisuda !
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <label for="kuota_instusi" class="form-label">Kuota Instusi <span class="color-danger-custom">*</span></label>
                                                        <input type="number" class="form-control" id="kuota_instusi" name="kuota_instusi" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan kuota instusi !
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mt-3">
                                                        <label for="tot_kuota" class="form-label">Total Kuota <span class="color-danger-custom">*</span></label>
                                                        <input type="number" class="form-control" id="tot_kuota" name="tot_kuota" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan total kuota !
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mt-3">
                                                        <label for="tot_wisudawan" class="form-label">Total Wisudawan<span class="color-danger-custom">*</span></label>
                                                        <input type="number" class="form-control" id="tot_wisudawan" name="tot_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan total wisudawan !
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="tgl_wisuda" class="form-label">Tgl Wisuda <span class="color-danger-custom">*</span></label>
                                                        <input type="datetime-local" class="form-control" id="tgl_wisuda" name="tgl_wisuda" required>
                                                        <div class="invalid-feedback">
                                                            Pilih tanggal wisuda!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="status_pendaftaran" class="form-label">Status Pendaftaran <span class="color-danger-custom">*</span></label>
                                                        <select class="form-select" id="status_pendaftaran" name="status_pendaftaran" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option value="Dibuka">Dibuka</option>
                                                            <option value="Ditutup">Ditutup</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih status pendaftaran!
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 float-end continue">
                                                    <span class="mdi mdi-checkbox-marked-circle-outline "> Simpan </span>
                                                </button>
                                                <a href="<?= base_url() ?>admin/wisuda" class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-end back">
                                                    <span class="mdi mdi-chevron-left"> Kembali </span>
                                                </a>
                                            </form>

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