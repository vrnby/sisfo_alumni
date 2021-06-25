<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/meta_landing_page') ?>
</head>
<style>
	body {
		height: 100vh;
	}
</style>

<body>
	<!-- Navbar -->
	<?php $this->load->view('template/navbar_landing_page') ?>
	<!-- Header -->
	<section id="hero2" class="d-flex align-items-center">


		<div class="container">
			<div class="col-6 col-xs-12">
			</div>
		</div>
	</section>
	<main id="main">

		<section id="why-us" class="why-us"></section>

		<section class="carinim-section">
			<div class="container">
				<div class="row mt-5 justify-content-center">
					<div class="col-md-4">
						<img src="<?php echo base_url() ?>assets/img/img-login.png" alt="" class="img-fluid">
					</div>
					<div class="col-md-8">
						<div class="text-center">
							<h2 class="fs-primary color-primary mb-5"><span class="text-bold">Reset</span> Password Anda</h2>
						</div>
					
						<form action="<?= base_url('passreset') ?>" method="post" class="col-md-8">
							<h6 class="fs-secondary text-grey-dark mb-3">Masukkan Password Baru Anda</h6>
							<input type="text" name="key" value="<?= $this->uri->segment(2); ?>" hidden>
							<div class="form-floating mb-3">
								<input type="password" id="pass" name="pass" class="fs-secondary text-grey-light form-control" minlength="8" placeholder="password baru" required>
								<label for="nim" class="fs-secondary text-grey-dark">Password</label>
							</div>
							

							<div class="text-center">
								<a href="<?php echo base_url() ?>login" class="btn button-secondary-custom fs-secondary mt-5 ps-4 pe-4" id="login" name="login">Batalkan</a>
								<button type="submit" class="btn button-primary-custom fs-secondary mt-5 ms-3 ps-4 pe-4" id="login">Save</button>
							</div>
					</div>
					</form>
				</div>
			</div>
			</div>
		</section>
</body>
<footer>
	<?php $this->load->view('template/script_landing_page') ?>
</footer>

</html>
