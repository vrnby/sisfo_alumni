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

        <section id="kontakus" class="detailtracer">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 ">
                        <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md" style="right: 79%;width: 16rem;top:26.5%">
                        <h2 class="text-bold">KONTAK KAMI</h2>
                        <p class="fs-secondary text-grey-light subtitle">Kirimkan pesan Anda pada form di bawah ini</p>
                    </div>
                </div>

                <div class="row" id="contact-section">
                    <div class="col-lg-7 mt-5 mt-lg-0">

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
                    <div class="col-lg-5 img-col-md">
                        <img src="<?php echo base_url() ?>assets/img/kontakus.png" class="img-fluid float-end">
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