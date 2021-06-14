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
                        <button class="navbar-toggler pt-2" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="filter" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="mdi mdi-filter-variant"></span> -->
                        </button <div class="collapse navbar-collapse ms-5">
                        <div class="d-flex ms-md-auto float-end">
                            <a class="btn fs-secondary button-secondary-custom me-2 btn-sm px-4 pt-2 pb-2 btn-filter" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="filter" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="h5 mdi mdi-filter-variant" aria-hidden="true"></i> FILTER
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-dashboard2 collapse px-3" id="filter">
                    <div class="col-md-4">
                        <div class="fs-secondary text-grey-dark">NIM / Nama / Email</div>
                        <input type="text" class="fs-secondary text-grey-light form-control mt-1" id="keyword" style="background-color: #f8f8f8">
                    </div>
                    <div class="col-md-2">
                        <div class="fs-secondary text-grey-dark ">Tahun Lulus</div>
                        <select class="fs-secondary text-grey-light  form-select mt-1" id="tahun_lulus" style="background-color: #f8f8f8">
                            <option value="all">Semua</option>
                            <?php
                            $years = array_reverse(range(1900, strftime("%Y", time())));
                            foreach ($years as $year) {
                                ?>
                                <option value="<?= $year ?>"><?= $year ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="fs-secondary text-grey-dark">Jenjang</div>
                        <select class="fs-secondary text-grey-light  form-select mt-1" id="jenjang" style="background-color: #f8f8f8">
                            <option value="all">Semua</option>
                            <?php foreach ($jenjang as $row) { ?>
                                <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="fs-secondary text-grey-dark">Program Studi</div>
                        <select class="fs-secondary text-grey-light  form-select mt-1" id="prodi" style="background-color: #f8f8f8">
                            <option value="all">Semua</option>
                            <?php foreach ($prodi as $row) { ?>
                                <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                            <?php } ?>
                            <!-- <option value="D4 Keuangan">D4 Keuangan</option>                             -->
                        </select>
                    </div>
                </div>
                <div class="row mt-3 filter_data"></div>
                <div id="pagination_link" aria-label="Page navigation example">
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