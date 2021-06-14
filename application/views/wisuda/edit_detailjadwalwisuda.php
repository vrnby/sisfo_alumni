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
                                <div class="fw-bolder fs-2">Ubah Detail Jadwal Wisuda</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>admin/wisuda">Jadwal Wisuda</a> / Ubah Detail Jadwal Wisuda</span>
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
                                            <h5 class="card-title ms-1 text-info">Ubah Jadwal Wisuda</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-2 pe-5 ps-5">
                                        <div class="col">
                                            <form action="#" method="POST" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="tahungelsesi" class="form-label">Program Studi <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="tahungelsesi" name="tahungelsesi" value="2020 Gel. 1 Sesi 1" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan Tahun, Gel, dan Sesi !
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <label for="kuota_instusi" class="form-label">Kuota Prodi <span class="color-danger-custom">*</span></label>
                                                        <input type="number" class="form-control" id="kuota_instusi" name="kuota_instusi" value="936" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan kuota instusi !
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <label for="kuota_instusi" class="form-label">Total Wisudawan<span class="color-danger-custom">*</span></label>
                                                        <input type="number" class="form-control" id="kuota_instusi" name="kuota_instusi" value="936" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan kuota instusi !
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <label for="status_pendaftaran" class="form-label">Status Pendaftaran <span class="color-danger-custom">*</span></label>
                                                        <select class="form-select" id="status_pendaftaran" name="status_pendaftaran" value="dibuka" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option value="dibuka">Dibuka</option>
                                                            <option value="ditutup">Ditutup</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih status pendaftaran!
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 float-end continue">
                                                    <span class="mdi mdi-checkbox-marked-circle-outline "> Update </span>
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