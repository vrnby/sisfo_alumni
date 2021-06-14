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
                                <div class="fw-bolder fs-2">Riwayat Pekerjaan</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>mahasiswa/biodata">Biodata</a> / Riwayat Pekerjaan</span>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($this->session->status_add_riwayat_pekerjaan) && $this->session->status_add_riwayat_pekerjaan == "success") { ?>
                        <?php unset($_SESSION['status_add_riwayat_pekerjaan']); ?>
                        <div class="row row-dashboard">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Berhasil menambahkan riwayat pekerjaan.
                                    <button type="button" class="btn-close pb-3" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_update_riwayat_pekerjaan) && $this->session->status_update_riwayat_pekerjaan == "success") { ?>
                        <?php unset($_SESSION['status_update_riwayat_pekerjaan']); ?>
                        <div class="row row-dashboard">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Berhasil mengedit riwayat pekerjaan.
                                    <button type="button" class="btn-close pb-3" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_delete_riwayat_pekerjaan) && $this->session->status_delete_riwayat_pekerjaan == "success") { ?>
                        <?php unset($_SESSION['status_delete_riwayat_pekerjaan']); ?>
                        <div class="row row-dashboard">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Berhasil menghapus riwayat pekerjaan.
                                    <button type="button" class="btn-close pb-3" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row row-dashboard mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <h5 class="ms-1 text-info">Daftar Riwayat Pekerjaan</h5>
                                                </div>
                                                <div class="col text-right">
                                                    <a class="btn btn-sm button-primary-custom ps-4 pe-4 pt-2 pb-2 me-3" href="<?= base_url() ?>mahasiswa/biodata/riwayatpekerjaan/tambah">
                                                        <img src="<?= base_url() ?>assets/img/iconadd.png" width="25" class="mt-2 me-2">
                                                        <span class="float-end">Tambah </br>Pekerjaan</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <table id="example1 full-table" class="table table-striped table-borderless table-alumni">
                                                <thead>
                                                    <tr>
                                                        <td>No</td>
                                                        <td>Nama Kantor</td>
                                                        <!-- <td>Jenis Kantor</td> -->
                                                        <td>Jabatan/Posisi</td>
                                                        <td>Tgl Mulai Bekerja</td>
                                                        <!-- <td>Pendapatan</td> -->
                                                        <td>Dari JPC</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bolder">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($pekerjaan as $row) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td class="nama-kantor"><?= $row->nama ?></td>
                                                            <!-- <td><?= $row->jenis_kantor ?></td> -->
                                                            <td><?= $row->jabatan ?></td>
                                                            <td><?= $row->tgl_masuk ?></td>
                                                            <!-- <td><?= $row->pendapatan ?></td> -->
                                                            <td><?= $row->info_jpc ?></td>
                                                            <td>
                                                                <a href="<?= base_url() ?>mahasiswa/biodata/riwayatpekerjaan/edit/<?= $row->id ?>"><i class="btn btn-sm mdi mdi-square-edit-outline text-success"></i></a>
                                                                <a><span class="btn btn-sm mdi mdi-delete-outline text-danger delete-pekerjaan"></span></a>
                                                                <input type="hidden" class="id-pekerjaan" value="<?= $row->id ?>">
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
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
        var base_url = '<?= base_url() ?>'
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
        $(function() {
            $("#example1").DataTable();
        });

        $(".table").on('click', '.delete-pekerjaan', function() {
            var nama = $(this).closest('tr').find('.nama-kantor').text()
            var id = $(this).closest('td').find('.id-pekerjaan').val()
            if (!confirm("Apakah Anda yakin menghapus data " + nama + "?")) {
                return false;
            }
            window.location.href = base_url + "biodata/deletepekerjaan/" + id
        })
    </script>
</body>

</html>