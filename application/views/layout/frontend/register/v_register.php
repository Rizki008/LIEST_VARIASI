<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Registrasi</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Registrasi</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<img class="img-fluid" src="<?= base_url() ?>karma-master/img/login.jpg" alt="">
					<div class="hover">
						<h4>Masuk</h4>
						<a class="primary-btn" href="<?= base_url('pelanggan/login') ?>">Masuk</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<?php
					echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

					if ($this->session->flashdata('pesan')) {
						echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Sukses</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					} ?>
					<h3><?= $title ?></h3>
					<form class="row login_form" action="<?= base_url('pelanggan/register') ?>" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" value="<?= set_value('nama') ?>">
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="username" name="username" placeholder="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'username'" value="<?= set_value('username') ?>">
						</div>
						<div class="col-md-12 form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" value="<?= set_value('email') ?>">
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" value="<?= set_value('password') ?>">
						</div>
						<div class="col-md-12 form-group">
							<div class="default-select" id="default-select"">
								<select class=" form-control" id="jenis_kel" name="jenis_kel">
								<option value="1">Laki-Laki</option>
								<option value="2">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<input type="number" class="form-control" id="usia" name="usia" placeholder="Usia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Usia'" value="<?= set_value('usia') ?>">
						</div>
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="no_tlpn" name="no_tlpn" placeholder="Nomor Telpon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telpon'" value="<?= set_value('no_tlpn') ?>">
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="primary-btn">Registrasi</button>
						</div>
					</form>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->