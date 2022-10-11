<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Masuk</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Beranda<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Masuk</a>
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
						<h4>Daftar</h4>
						<a class="primary-btn" href="<?= base_url('pelanggan/register') ?>">Daftar</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<?php

					echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

					if ($this->session->flashdata('error')) {
						echo '<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5><i class="icon fa fa-ban"></i> Gagal</h5>';
						echo $this->session->flashdata('error');
						echo '</div>';
					}

					if ($this->session->flashdata('pesan')) {
						echo '<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h5><i class="icon fa fa-check"></i> Sukses</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					} ?>
					<h3><?= $title ?></h3>
					<form class="row login_form" action="<?= base_url('pelanggan/login') ?>" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-12 form-group">
							<input type="email" class="form-control" value="<?= set_value('email') ?>" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" value="<?= set_value('password') ?>" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="primary-btn">Masuk</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->