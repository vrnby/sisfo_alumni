<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_landing_page') ?>
</head>

<body class="landingpage">
    <!-- Navbar -->
    <?php $this->load->view('template/navbar_menu_landingpage') ?>

    <section id="hero" class="d-flex align-items-center">


        <div class="container">
            <div class="col-lg-6 col-xs-12">
                <h1 class="fs-primary text-grey-dark">Sistem Informasi Alumni</h1>
                <h4 class="fs-secondary text-grey-light mt-3">Sarana untuk para alumni berbagi pengalaman dan informasi tentang dunia kerja.
                    Selain itu, sistem informasi ini juga berguna bagi para pihak yang ingin mengetahui data pribadi alumni polinema.
                </h4>
                <a href="<?= base_url() ?>alumni" class="fs-secondary button-warning-fill scrollto">TEMUKAN ALUMNI</a>
            </div>
        </div>
    </section>

    <main id="main">

        <section id="why-us" class="why-us img-col-md"></section>

        <section id="pengumuman" class="pengumuman">
            <div class="container">

                <div class="row">
                    <img src="<?php echo base_url() ?>assets/img/underline1.png" class="img-fluid img-line img-col-md">
                    <div class="col-lg-12 col-md-12 col-xs-12 section-title">
                        <h2 class="fs-primary text-danger mb-2">PENGUMUMAN</h2>
                        <p class="fs-secondary subtitle text-grey-light mb-4">Terus perbarui informasi terkini melalui website alumni</p>
                    </div>

                    <div class="main-gallery js-flickity">
                        <div class="gallery-cell">
                            <div class="card card-pengumuman" style="width: 18rem;">
                                <div class="card-body">
                                    <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                    <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 April 2021</p>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div class="card card-pengumuman" style="width: 18rem;">
                                <div class="card-body">
                                    <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                    <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 Mei 2021</p>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div class="card card-pengumuman" style="width: 18rem;">
                                <div class="card-body">
                                    <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                    <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 Juni 2021</p>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div class="card card-pengumuman" style="width: 18rem;">
                                <div class="card-body">
                                    <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                    <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 30 Juni 2021</p>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>

        <img src="<?php echo base_url() ?>assets/img/lineblue.png" class="line-base img-col-md">
        <section id="agenda" class="agenda section-bg agenda">
            <div class="container">

                <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md">
                <div class="section-title">
                    <h2 class="fs-primary mb-2">AGENDA</h2>
                    <p class="fs-secondary text-grey-light subtitle mb-4">Kumpulan acara yang berkaitan dengan lulusan baru dan alumni PoliteknIk Negeri Malang</p>
                </div>

                <div class="contain">
                    <div id="owl-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card-body pt-0 pb-0">
                                <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 Januari 2021</p>
                                <div>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card-body pt-0 pb-0">
                                <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 Februari 2021</p>
                                <div>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card-body pt-0 pb-0">
                                <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 Maret 2021</p>
                                <div>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card-body pt-0 pb-0">
                                <h6 class="fs-secondary text-grey-dark card-subtitle mb-2 text-muted">Pengumuman Wisuda Ke-52 Secara Daring</h6>
                                <p class="fs-secondary text-grey-light card-text"><i class="mdi mdi-calendar"></i>&nbsp; 20 April 2021</p>
                                <div>
                                    <button type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <img src="<?php echo base_url() ?>assets/img/lineblue.png" class="line-base img-col-md">

        <section id="tracerstudy" class="tracerstudy">
            <div class="container">

                <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md">
                <div class="section-title">
                    <h2 class="fs-primary">TRACER STUDY</h2>
                    <p class="fs-secondary text-grey-light subtitle">Dalam rangka melaksanakan pengukuran dan peningkatan kualitas Politeknik Negeri Malang sebagai Perguruan Tinggi unggulan di lingkungan Kementerian Pendidikan dan Kebudayaan, dengan hormat kami sampaikan agar Alumni Polinema dapat <span class="text-bold">mengisikan penelusuran jejak alumni (Tracer Study)</span> dengan cara sebagai berikut:</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4">
                        <div class="card-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <img src="<?php echo base_url() ?>assets/img/step1.png" class="img-icon">
                            <h6 class="fs-secondary text-grey-dark">Masuk ke sistem informasi alumni menggunakan nim dan password alumni (password sama dengan SIAKAD)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4">
                        <div class="card-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <img src="<?php echo base_url() ?>assets/img/step2.png" class="img-icon">
                            <h6 class="fs-secondary text-grey-dark">Memperbarui data pribadi (alamat rumah dan nomor telepon)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4">
                        <div class="card-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <img src="<?php echo base_url() ?>assets/img/step3.png" class="img-icon">
                            <h6 class="fs-secondary text-center text-grey-dark">Menambahkan riwayat pekerjaan </h6>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section id="gallery" class=" section-bg-white gallery">
            <div class="container">

                <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid-custom  img-col-md img-line-custom">
                <div class="section-title">
                    <h2 class="fs-primary text-danger">GALERI</h2>
                    <p class="fs-secondary text-grey-light subtitle">Momentum berharga di akhir masa study di Politeknik Negeri Malang</p>
                </div>
            </div>

            <div class="container">
                <img src="<?php echo base_url() ?>assets/img/pattern-cerita.png" alt="" class="pattern img-col-md">
                <img src="<?php echo base_url() ?>assets/img/pattern-cerita.png" alt="" class="pattern2 img-col-md">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" class="galelry-lightbox">
                                <img src="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" class="galelry-lightbox">
                                <img src="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?php echo base_url() ?>assets/img/gallery/gallery-4.png" class="galelry-lightbox">
                                <img src="<?php echo base_url() ?>assets/img/gallery/gallery-4.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div>
                        <a href="<?= base_url() ?>galeri" class="btn button-warning-outline  float-end me-2 mt-4">Lihat Selengkapnya</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title mt-5">
                    <h2 class="fs-primary mt-5 text-white mb-2">KONTAK KAMI</h2>
                    <p class="fs-secondary text-grey-light subtitle mb-4">Kirimkan pesan Anda pada form di bawah ini</p>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-6">
                        <div class="info">
                            <div class="address">
                                <h5 class="fs-primary text-white">Kontak Pengurus Alumni Polinema :</h5>
                                <h6 class="fs-secondary  text-grey-light"><span class="mdi mdi-home-outline me-1"></span>Gedung AW Lt.1 Bag.Kemahasiswaan
                                    </br><span class="me-4"></span>Jl. Soekarno Hatta PO.Box 04 Malang 65101
                                </h6>
                                <h6 class="fs-secondary mt-2 text-grey-light"><span class="mdi mdi-phone-in-talk me-1"></span>Telepon: 0341(404424)
                                    </br><span class="me-4"></span>Fax: 0341-404420</h6>
                            </div>



                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0" id="contact-section">                        
                        <form onsubmit="sentmessage()">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM Anda" >
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" >
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" >
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" id="uraian" name="uraian" rows="5" placeholder="Pesan" ></textarea>
                            </div>
                            <div class="my-3">                                                          
                                <div class="loading alert alert-primary d-none">Loading ...</div>
                                <div class="error-message alert alert-danger d-none"></div>
                                <div class="sent-message alert alert-success d-none">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit" class="button-warning-fill btn-kirim">K I R I M</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </main>


</body>
<footer>
    <?php $this->load->view('template/script_landing_page') ?>
    <script>
        var base_url = "<?= base_url() ?>"

        function sentmessage() {
            event.preventDefault()            
            $('.loading').removeClass('d-none')
            $('.error-message').addClass('d-none')
            $('.sent-message').addClass('d-none')

            $.ajax({
                type: 'POST',
                url: base_url + 'pesan/add',
                dataType: 'JSON',
                data: {
                    nim: $('#nim').val(),
                    email: $('#email').val(),
                    judul: $('#judul').val(),
                    uraian: $('#uraian').val()
                },
                cache: false,
                success: function(data) {                    
                    if (data.status == 200) {
                        $('.loading').addClass('d-none')
                        $('.sent-message').removeClass('d-none')
                        $('.sent-message').html(data.message)                            
                    } else if (data.status == 404) {
                        $('.loading').addClass('d-none')
                        $('.error-message').removeClass('d-none')
                        $('.error-message').html(data.message)
                    }
                    console.log(data)                        
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
                    $('.loading').html(msg)
                }                
            })
        }
    </script>
</footer>

</html>