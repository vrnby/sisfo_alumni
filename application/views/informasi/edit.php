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
                    <div class="row row-dashboard">
                        <div class="col-md-4 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Edit Informasi</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Informasi / Edit Informasi</span>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($informasi as $row) { ?>
                        <div class="row row-dashboard2">
                            <div class="col-12">
                                <form action="<?= base_url() ?>informasi/update" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="judul_informasi" name="judul_informasi" value="<?= $row->judul ?>" placeholder="Judul..." required>
                                                <label for="judul_informasi">Judul</label>
                                                <div class="invalid-feedback">
                                                    Masukkan judul informasi!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <select class="form-select" id="jenis_informasi" name="jenis_informasi" aria-label="Floating label select example" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <?php foreach ($tipe_informasi as $tipe) { ?>
                                                        <option value="<?= $tipe->id ?>" <?= ($row->id_tipe_informasi == $tipe->id) ? 'selected' : '' ?>><?= $tipe->nama ?></option>
                                                    <?php } ?>
                                                </select>
                                                <label for="jenis_informasi">Jenis Informasi</label>
                                                <div class="invalid-feedback">
                                                    Pilih jenis informasi!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-success" value="submit"><span class="mdi mdi-content-save-outline"> Simpan</span></button>
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Gambar</label>
                                                <input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpg, image/jpeg">
                                                <span class="text-danger">Max. 2Mb</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="dokumen">Dokumen PDF</label>
                                                <input type="file" class="form-control" name="dokumen" id="dokumen" accept="application/pdf">
                                            </div>
                                        </div>
                                    </div>
                                    <textarea class="form-control ckeditor" rows="25" id="post_content" name="content_informasi"><?= $row->isi ?></textarea>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>

        </div>
    </div>


    <!-- Script -->
    <?php $this->load->view('template/script_dashboard') ?>
    <!-- Zingchart -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/stepform/enchanter.js"></script>
    <!-- tinymce -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "#post_content",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
            automatic_uploads: false,
            paste_data_images: true,
            relative_urls: false,
            remove_script_host: false
        });
    </script>
    <!-- Menu Toggle Script -->
    <script>
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

        // max input image handler
        $("#image").change(function() {
            if ($(this)[0].files[0].size > 2097152) { // max file 2 MB
                alert('Gambar terlalu besar!')
                $(this).val('');
            }
        })

        // form validation
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

</body>

</html>