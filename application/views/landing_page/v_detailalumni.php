<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_landing_page') ?>
</head>

<body class="custom">
    <!-- Navbar -->
    <?php $this->load->view('template/navbar_landing_page') ?>

    <section id="hero2" class="d-flex align-items-center">
        <div class="container">
            <div class="col-6 col-xs-12">
            </div>
        </div>
    </section>

    <main id="main">

        <section id="why-us" class="why-us"></section>

        <section id="dataalumni" class="dataalumni ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md">

                        <h2 class="color-primary text-bold">DATA ALUMNI</h2>
                        <h6 class="fs-secondary float-end breadcrumb-landingpage img-col-md"><a class="text-muted"><a href="<?= base_url() ?>alumni">Data Alumni</a><span class="text-grey-light"> / Detail Data Alumni</span></a></h6>
                        <h6 class="fs-secondary breadcrumb-landingpage img-col-xs mb-4" style="top:0px;"><a class="text-muted"><a href="<?= base_url() ?>alumni">Data Alumni</a><span class="text-grey-light"> / Detail Data Alumni</span></a></h6>

                    </div>
                    <div class="col-12">
                        <div class="card datadetailalumni pt-4">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-2">

                                        <img class="img-fluid mx-auto d-block p-2" src="<?= base_url() ?>assets/img/alumni/1631120122.jpg" alt="Foto" style="background-color : #F4F3F3">

                                    </div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="fw-bold">Ventaria Juniawanti</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <h6 class="text-grey-light fw-bold">Biodata Akademik</h6>

                                                <table class="table fs-secondary table-borderless table-sm">
                                                    <tr>
                                                        <td class="fs-secondary text-grey-light" style="width:30%">NIM</td>
                                                        <td>:</td>
                                                        <td>1731710161</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-secondary text-grey-light">Jurusan</td>
                                                        <td>:</td>
                                                        <td>Teknik Elektro</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-secondary text-grey-light">Program Studi</td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-secondary text-grey-light">Tahun Masuk</td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-secondary text-grey-light">Tgl Lulus</td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-secondary text-grey-light">Tugas Akhir</td>
                                                        <td>:</td>
                                                        <td></td>
                                                    </tr>

                                                </table>
                                                <a href="<?= base_url() ?>alumni" class="btn button-secondary-custom btn-sm ps-3 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-start">
                                                    <span class="mdi mdi-chevron-left"> Kembali </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

</body>
<footer>
    <?php $this->load->view('template/script_landing_page') ?>
    <script>
        $(function() {
            var timer
            var delay = 600

            filter_data(1)

            function filter_data(page) {
                $('.filter_data').html("<div>Loading...</div>")
                var action = 'fetch_data'
                var keyword = $('#keyword').val()
                var tahun_lulus = $('#tahun_lulus').val()
                var jenjang = $('#jenjang').val()
                var prodi = $('#prodi').val()
                $.ajax({
                    url: '<?= base_url() ?>landingpage/fetch_data/' + page,
                    method: 'POST',
                    dataType: 'JSON',
                    data: {
                        action: action,
                        keyword: keyword,
                        tahun_lulus: tahun_lulus,
                        jenjang: jenjang,
                        prodi: prodi,
                        status_kerja: 'all',
                        status_upload_foto: 'all'
                    },
                    success: function(data) {
                        $('.filter_data').html(data.alumni_list)
                        $('#pagination_link').html(data.pagination_link)
                        $('#pagination_link ul li a').addClass('page-link') // custom tag a pagination library codeigniter
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
                        $('.filter_data').html(msg)
                    },

                })
            }

            // pagination link click handler
            $(document).on('click', '.pagination li a', function(event) {
                event.preventDefault()
                if (typeof $(this).data('ci-pagination-page') !== 'undefined') {
                    filter_data($(this).data('ci-pagination-page'))
                }
            })

            var toogleFilter = false
            $('.btn-filter').click(function() {
                if (toogleFilter) {
                    toogleFilter = false
                    $('#filter').addClass("collapse")
                } else {
                    toogleFilter = true
                    $('#filter').removeClass("collapse")
                }
            })

            $('#keyword').bind('input', function() {
                clearTimeout(timer)
                timer = setTimeout(function() {
                    filter_data(1)
                }, delay)
            })

            $("#tahun_lulus").change(function() {
                filter_data(1)
            })

            $("#jenjang").change(function() {
                filter_data(1)
            })

            $("#prodi").change(function() {
                filter_data(1)
            })

            $("#status_kerja").change(function() {
                filter_data(1)
            })

            $("#status_upload_foto").change(function() {
                filter_data(1)
            })
        })
    </script>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>