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
                        <div class="col-md-4 mt-1 mb-4">
                            <div class="row">
                                <div class="fw-bolder fs-2">Informasi</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Informasi</span>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($this->session->status_add_informasi) && $this->session->status_add_informasi == "success") { ?>
                        <?php unset($_SESSION['status_add_informasi']); ?>
                        <div class="row row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Informasi berhasil ditambahkan.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_edit_informasi) && $this->session->status_edit_informasi == "success") { ?>
                        <?php unset($_SESSION['status_edit_informasi']); ?>
                        <div class="row row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Informasi berhasil diubah.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_delete_informasi) && $this->session->status_delete_informasi == "success") { ?>
                        <?php unset($_SESSION['status_delete_informasi']); ?>
                        <div class="row row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Informasi berhasil dihapus.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <div class="row row-dashboard">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row mt-2 mb-4">
                                                <div class="col">
                                                    <h5 class="ms-1 text-info">Daftar Informasi</h5>
                                                </div>
                                                <div class="col text-right">
                                                    <a class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2" href="<?= base_url() ?>admin/informasi/add">
                                                        <span class="mdi mdi-plus">
                                                            Tambah
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <table id="example1" class="table table-striped table-borderless table-alumni" width="100%">
                                                <thead>
                                                    <tr>
                                                        <td style="width:6%">No</td>
                                                        <td style="width:12%">Tanggal</td>
                                                        <td style="width:55%">Judul</td>
                                                        <td style="width:15%">Tipe Informasi</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bolder">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($informasi as $row) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $row->tanggal ?></td>
                                                            <td class="judul_informasi"><?= $row->judul ?></td>
                                                            <td>
                                                                <?php
                                                                foreach ($tipe_informasi as $data) {
                                                                    if ($data->id == $row->id_tipe_informasi) {
                                                                        ?>
                                                                        <span class="badge <?= $data->background ?>"><?= $data->nama ?></span>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                            </td>
                                                            <td class="aksi">
                                                                <a href="<?= base_url() ?>admin/informasi/edit/<?= $row->id ?>"><i class="btn btn-sm mdi mdi-square-edit-outline text-success"></i></a>
                                                                <a><span class="btn btn-sm mdi mdi-delete-outline text-danger delete-informasi" data-id="<?= $row->id ?>"></span></a>
                                                                <!-- <input type="hidden" class="id-pekerjaan" value="<?= $row->id ?>"> -->
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

        $(".table").on('click', '.delete-informasi', function() {
            var nama = $(this).closest('tr').find('.judul_informasi').text()
            var id = $(this).data('id')
            if (!confirm("Apakah Anda yakin menghapus informasi \"" + nama + "\"?")) {
                return false;
            }
            window.location.href = base_url + "informasi/delete/" + id
        })
    </script>
</body>

</html>