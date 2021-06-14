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
                                <div class="fw-bolder fs-2">Pendaftaran Wisuda</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Wisuda / Pendaftaran Wisuda</span>
                            </div>
                        </div>
                    </div>
                    <?php if (sizeof($alumni_status) == 0) { ?>        
                    <!-- Pendaftaran Wisuda Dibuka-->
                    <div class="row row-dashboard mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="pe-0">
                                            <span class="label-success-custom float-end img-col-xs label-xs mb-3">PENDAFTARAN WISUDA 2020 DIBUKA</span>
                                        </div>
                                        <div class="col-md-8 col-xs-12">
                                            <h5 class="color-primary">Pendaftaran Wisuda</h5>
                                            <p>Wisuda Tahun 2020 tersedia dengan kategori wisuda online dan wisuda offline. Ketentuan wisuda telah tersedia pada lampiran edaran yang dapat diunduh pada halaman pengumuman.</p>
                                            <p class="font-bold-custom">Pilih salah satu kategori wisuda dibawah ini.</p>
                                            <a href="#" class="btn button-primary-custom btn-sm p-3 me-3 button-shadow" data-bs-toggle="modal" data-bs-target="#popuponline">
                                                <img src="<?= base_url() ?>assets/img/iconwisudaonline.png" width="45">
                                                <p class="mb-0 mt-2">Wisuda Online</p>
                                            </a>
                                            <a href="#" class="btn button-primary-custom btn-sm p-3 me-3 button-shadow" data-bs-toggle="modal" data-bs-target="#popupoffline">
                                                <img src="<?= base_url() ?>assets/img/iconwisudaoffline.png" width="67">
                                                <p class="mb-0 mt-2">Wisuda Offline</p>
                                            </a>
                                        </div>
                                        <div class="col-md-4 img-col-md">
                                            <span class="label-success-custom float-end ">PENDAFTARAN WISUDA 2020 DIBUKA</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <!-- Telah Melakukan Pendaftaran-->
                    <div class="row row-dashboard mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="pe-0">
                                            <span class="label-success-custom float-end img-col-xs label-xs mb-3">PENDAFTARAN WISUDA 2020 DIBUKA</span>
                                        </div>
                                        <div class="col-md-8 col-xs-12">
                                            <h5 class="color-primary">Pendaftaran Wisuda</h5>
                                            <p>Wisuda Tahun 2020 tersedia dengan kategori wisuda online dan wisuda offline. Ketentuan wisuda telah tersedia pada lampiran edaran yang dapat diunduh pada halaman pengumuman.</p>
                                            <p class="font-bold-custom">Pilih salah satu kategori wisuda dibawah ini.</p>
                                            <a href="#" class="btn button-grey-disabled btn-sm p-3 me-3 button-shadow">
                                                <img src="<?= base_url() ?>assets/img/iconwisudaonline.png" width="45">
                                                <p class="mb-0 mt-2">Wisuda Online</p>
                                            </a>
                                            <a href="#" class="btn button-grey-disabled btn-sm p-3 me-3 button-shadow">
                                                <img src="<?= base_url() ?>assets/img/iconwisudaoffline.png" width="67">
                                                <p class="mb-0 mt-2">Wisuda Offline</p>
                                            </a>

                                        </div>
                                        <div class="col-md-4 img-col-md">
                                            <span class="label-success-custom float-end ">PENDAFTARAN WISUDA 2020 DIBUKA</span>
                                        </div>
                                        <div class="col-md-12 col-xs-12 mt-4">
                                            <span class="label-danger-custom ">ANDA TELAH MENDAFTAR</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- Modal -->
                    <div class="modal fade modal-feedback" id="popuponline" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body mt-4">
                                    <p class="ms-3">Apakah Anda yakin memilih Wisuda Online ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-2 mb-2 " data-bs-dismiss="modal">
                                        <span class="mdi mdi-close"> Batal </span>
                                    </button>
                                    <a href="<?=base_url()?>mahasiswa/wisuda/choice/online" type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-2 mb-2">
                                        <span class="mdi mdi-check "> Yakin </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade modal-feedback" id="popupoffline" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body mt-4">
                                    <p class="ms-3">Apakah Anda yakin memilih Wisuda Offline ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-2 mb-2 " data-bs-dismiss="modal">
                                        <span class="mdi mdi-close"> Batal </span>
                                    </button>
                                    <a href="<?=base_url()?>mahasiswa/wisuda/choice/offline" type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-2 mb-2">
                                        <span class="mdi mdi-check "> Yakin </span>
                                    </a>
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
        $(".show-detail").click(function() {
            if (detailId == $(this).data('id')) {
                detailId = $(this).data('id')
                $("#detailwisuda").toggleClass("d-none")
                // do load data
            } else {
                detailId = $(this).data('id')
                $("#detailwisuda").removeClass("d-none")
                // do load data
            }
        })
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