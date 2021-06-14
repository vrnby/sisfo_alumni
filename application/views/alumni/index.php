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
                                        <span class="text-muted fs-6">Data Alumni</span>
                                    </div>
                                </a>
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
                        <div class="col-md-2">
                            <div class="text-muted">NIM / Nama / Email</div>
                            <input type="text" class="form-control mt-1" id="keyword" style="background-color: #f8f8f8">
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Tahun Lulus</div>
                            <select class="form-select mt-1" id="tahun_lulus" style="background-color: #f8f8f8">
                                <option value="all">Semua</option>
                                <?php
                                $years = array_reverse(range(1900, strftime("%Y", time())));
                                foreach ($years as $year) {
                                    ?>
                                    <option value="<?= $year ?>"><?= $year ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Jenjang</div>
                            <select class="form-select mt-1" id="jenjang" style="background-color: #f8f8f8">
                                <option value="all">Semua</option>
                                <?php foreach ($jenjang as $row) { ?>
                                    <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Program Studi</div>
                            <select class="form-select mt-1" id="prodi" style="background-color: #f8f8f8">
                                <option value="all">Semua</option>
                                <?php foreach ($prodi as $row) { ?>
                                    <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                                <?php } ?>
                                <!-- <option value="D4 Keuangan">D4 Keuangan</option>                             -->
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="text-muted">Status Kerja</div>
                            <select class="form-select mt-1" id="status_kerja" style="background-color: #f8f8f8">
                                <option value="all">Semua</option>
                                <option value="sudah">Sudah Bekerja</option>
                                <option value="belum">Belum Bekerja</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-4">
                            <div class="text-muted">Status Upload Foto</div>
                            <select class="form-select mt-1" id="status_upload_foto" style="background-color: #f8f8f8">
                                <option value="all">Semua</option>
                                <option value="sudah">Sudah Upload</option>
                                <option value="belum">Belum Upload</option>
                            </select>
                        </div>
                    </div>
                    <div class="row row-dashboard2">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="ms-1 text-info mb-3">Data Alumi</h5>
                                            <div class="row filter_data">
                                            </div>
                                            <div id="pagination_link" aria-label="Page navigation example">
                                            </div>
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


    <!-- Menu Toggle Script -->
    <script>
        $(function() {
            var timer
            var delay = 600

            filter_data(1)

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

            function filter_data(page) {
                $('.filter_data').html("<div>Loading...</div>")
                var action = 'fetch_data'
                var keyword = $('#keyword').val()
                var tahun_lulus = $('#tahun_lulus').val()
                var jenjang = $('#jenjang').val()
                var prodi = $('#prodi').val()
                var status_kerja = $('#status_kerja').val()
                var status_upload_foto = $('#status_upload_foto').val()
                $.ajax({
                    url: '<?= base_url() ?>alumni/fetch_data/' + page,
                    method: 'POST',
                    dataType: 'JSON',
                    data: {
                        action: action,
                        keyword: keyword,
                        tahun_lulus: tahun_lulus,
                        jenjang: jenjang,
                        prodi: prodi,
                        status_kerja: status_kerja,
                        status_upload_foto: status_upload_foto
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
</body>

</html>