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
                                <div class="fw-bolder fs-2">Jadwal Wisuda</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Wisuda / Jadwal Wisuda</span>
                            </div>
                        </div>
                    </div>
                    <?php if (sizeof($alumni_status) == 0) {?>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8 col-xs-12">
                                            <h5 class="color-primary">Jadwal Wisuda</h5>
                                            <p>Jadwal wisuda ditetapkan oleh admin, jadwal wisuda akan muncul setelah pendaftaran diverifikasi oleh admin</p>
                                        </div>
                                        <div class="col-md-4 ">
                                        </div>
                                        <div class="col-md-5 jadwal-wisudaku">
                                            <div class="card p-3">
                                                <h5 class="color-primary">Jadwal Wisuda Saya <span class="label-danger-custom float-end label-xs-mt">BELUM TERDAFTAR</span></h5>
                                                <div class="responsive-table">
                                                    <table class="table table-one">
                                                        <tbody>
                                                            <tr>
                                                                <td class=" text-grey" width="30%">Gelombang </td>
                                                                <td class="pull-left text-brand"><span>:</span>&nbsp; -</td>
                                                            </tr>
                                                            <tr>
                                                                <td class=" text-grey" width="30%">Tanggal Wisuda </td>
                                                                <td class="pull-left text-grey-dark"><span>:</span>&nbsp; -</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 jadwal-wisudaall">
                                            <div class="card p-3">
                                                <h5 class="color-primary">Jadwal Seluruh Wisuda</h5>
                                                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                    <table class="table table-striped table-borderless table-alumni">
                                                        <thead>
                                                            <tr>
                                                                <td class="align-middle">Tahun Gel dan Sesi</td>
                                                                <td class="text-right">Tanggal Wisuda</td>
                                                                <td></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-bolder">
                                                            <tr>
                                                                <td>2020 Gel. 1 Sesi 1</td>
                                                                <td class="text-right">31-03-2021 09:00</td>
                                                                <td class="text-center">
                                                                    <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2020 Gel. 1 Sesi 2</td>
                                                                <td class="text-right">31-03-2021 13:00</td>
                                                                <td class="text-center">
                                                                    <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2020 Gel. 2 Sesi 1</td>
                                                                <td class="text-right">31-03-2021 09:00</td>
                                                                <td class="text-center">
                                                                    <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2020 Gel. 2 Sesi 2</td>
                                                                <td class="text-right">31-03-2021 13:00</td>
                                                                <td class="text-center">
                                                                    <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
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
                    </div>
                    <?php } else { ?>                    
                        <?php if($alumni_status[0]->terdaftar == '') { ?>
                        <!-- pendaftaran sedang diproses -->
                        <div class="row row-dashboard mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8 col-xs-12">
                                                <h5 class="color-primary">Jadwal Wisuda</h5>
                                                <p>Jadwal wisuda ditetapkan oleh admin, jadwal wisuda akan muncul setelah pendaftaran diverifikasi oleh admin</p>
                                            </div>
                                            <div class="col-md-4 ">
                                            </div>
                                            <div class="col-md-5 jadwal-wisudaku">
                                                <div class="card p-3">
                                                    <h5 class="color-primary">Jadwal Wisuda Saya </h5>
                                                    <div class="mt-4 mb-4">
                                                        <span class="label-warning-custom label-xs-mt">PENDAFTARANMU SEDANG DIVERIFIKASI ADMIN</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 jadwal-wisudaall">
                                                <div class="card p-3">
                                                    <h5 class="color-primary">Jadwal Seluruh Wisuda</h5>
                                                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                        <table class="table table-striped table-borderless table-alumni">
                                                            <thead>
                                                                <tr>
                                                                    <td class="align-middle">Tahun Gel dan Sesi</td>
                                                                    <td class="text-right">Tanggal Wisuda</td>
                                                                    <td></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-bolder">
                                                                <tr>
                                                                    <td>2020 Gel. 1 Sesi 1</td>
                                                                    <td class="text-right">31-03-2021 09:00</td>
                                                                    <td class="text-center">
                                                                        <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2020 Gel. 1 Sesi 2</td>
                                                                    <td class="text-right">31-03-2021 13:00</td>
                                                                    <td class="text-center">
                                                                        <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2020 Gel. 2 Sesi 1</td>
                                                                    <td class="text-right">31-03-2021 09:00</td>
                                                                    <td class="text-center">
                                                                        <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2020 Gel. 2 Sesi 2</td>
                                                                    <td class="text-right">31-03-2021 13:00</td>
                                                                    <td class="text-center">
                                                                        <a href="#" class="text-danger"><small>Lihat Detail</small></a>
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
                        </div>
                        <?php } else { ?>
                            <?php if ($alumni_status[0]->terdaftar=='Offline') {?>
                            <!-- jadwal offline -->
                            <div class="row row-dashboard mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-12">
                                                    <h5 class="color-primary">Jadwal Wisuda</h5>
                                                    <p>Jadwal wisuda ditetapkan oleh admin, jadwal wisuda akan muncul setelah pendaftaran diverifikasi oleh admin</p>
                                                </div>
                                                <div class="col-md-4 ">
                                                </div>
                                                <div class="col-md-5 jadwal-wisudaku">
                                                    <div class="card p-3">
                                                        <h5 class="color-primary">Jadwal Wisuda Saya <span class="label-warning-custom float-end label-xs-mt">WISUDA OFFLINE</span></h5>
                                                        <div>
                                                            <p class="mt-3">Lengkapi persyaratan wisudamu</p>

                                                            <a class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3" href="<?= base_url() ?>mahasiswa/wisuda/pendaftaran/kelengkapan">
                                                                <span class="mdi mdi-cursor-pointer"> Klik Disini </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 jadwal-wisudaall">
                                                    <div class="card p-3">
                                                        <h5 class="color-primary">Jadwal Seluruh Wisuda</h5>
                                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                            <table class="table table-striped table-borderless table-alumni">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="align-middle">Tahun Gel dan Sesi</td>
                                                                        <td class="text-right">Tanggal Wisuda</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-bolder">
                                                                    <tr>
                                                                        <td>2020 Gel. 1 Sesi 1</td>
                                                                        <td class="text-right">31-03-2021 09:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 1 Sesi 2</td>
                                                                        <td class="text-right">31-03-2021 13:00</td>
                                                                        <td class="text-center">
                                                                            <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 2 Sesi 1</td>
                                                                        <td class="text-right">31-03-2021 09:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 2 Sesi 2</td>
                                                                        <td class="text-right">31-03-2021 13:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
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
                            </div>
                            <!-- berkas sedang diverifikasi -->
                            <div class="row row-dashboard mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-12">
                                                    <h5 class="color-primary">Jadwal Wisuda</h5>
                                                    <p>Jadwal wisuda ditetapkan oleh admin, jadwal wisuda akan muncul setelah pendaftaran diverifikasi oleh admin</p>
                                                </div>
                                                <div class="col-md-4 ">
                                                </div>
                                                <div class="col-md-5 jadwal-wisudaku">
                                                    <div class="card p-3">
                                                        <h5 class="color-primary">Jadwal Wisuda Saya</h5>
                                                        <div>
                                                            <div class="mt-4 mb-4">
                                                                <span class="label-warning-custom label-xs-mt">DOKUMEN ANDA SEDANG DIPROSES</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 jadwal-wisudaall">
                                                    <div class="card p-3">
                                                        <h5 class="color-primary">Jadwal Seluruh Wisuda</h5>
                                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                            <table class="table table-striped table-borderless table-alumni">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="align-middle">Tahun Gel dan Sesi</td>
                                                                        <td class="text-right">Tanggal Wisuda</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-bolder">
                                                                    <tr>
                                                                        <td>2020 Gel. 1 Sesi 1</td>
                                                                        <td class="text-right">31-03-2021 09:00</td>
                                                                        <td class="text-center">
                                                                            <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 1 Sesi 2</td>
                                                                        <td class="text-right">31-03-2021 13:00</td>
                                                                        <td class="text-center">
                                                                            <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 2 Sesi 1</td>
                                                                        <td class="text-right">31-03-2021 09:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 2 Sesi 2</td>
                                                                        <td class="text-right">31-03-2021 13:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
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
                            </div>
                            <?php } else {?>
                            <!-- jadwal wisuda online -->
                            <div class="row row-dashboard mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 col-xs-12">
                                                    <h5 class="color-primary">Jadwal Wisuda</h5>
                                                    <p>Jadwal wisuda ditetapkan oleh admin, jadwal wisuda akan muncul setelah pendaftaran diverifikasi oleh admin</p>
                                                </div>
                                                <div class="col-md-4 ">
                                                </div>
                                                <div class="col-md-5 jadwal-wisudaku">
                                                    <div class="card p-3">
                                                        <h5 class="color-primary">Jadwal Wisuda Saya <span class="label-warning-custom float-end label-xs-mt">WISUDA ONLINE</span></h5>
                                                        <div>
                                                            <p class="mt-3">Berisi tanggal, jam, link wisuda online</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 jadwal-wisudaall">
                                                    <div class="card p-3">
                                                        <h5 class="color-primary">Jadwal Seluruh Wisuda</h5>
                                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                            <table class="table table-striped table-borderless table-alumni">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="align-middle">Tahun Gel dan Sesi</td>
                                                                        <td class="text-right">Tanggal Wisuda</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-bolder">
                                                                    <tr>
                                                                        <td>2020 Gel. 1 Sesi 1</td>
                                                                        <td class="text-right">31-03-2021 09:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 1 Sesi 2</td>
                                                                        <td class="text-right">31-03-2021 13:00</td>
                                                                        <td class="text-center">
                                                                            <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal/detail" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 2 Sesi 1</td>
                                                                        <td class="text-right">31-03-2021 09:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2020 Gel. 2 Sesi 2</td>
                                                                        <td class="text-right">31-03-2021 13:00</td>
                                                                        <td class="text-center">
                                                                            <a href="#" class="text-danger"><small>Lihat Detail</small></a>
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
                            </div>
                    <?php 
                                }
                            }
                        } 
                    ?>

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