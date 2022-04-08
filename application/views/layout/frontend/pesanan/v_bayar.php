<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Order Tracking</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Fashon Category</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Tracking Box Area =================-->
<section class="tracking_box_area section_gap">
	<div class="container">
		<div class="tracking_box_inner">
			<p>To track your order please enter your Order ID in the box below and press the "Track" button. This
				was given to you on your receipt and in the confirmation email you should have received.</p>
			<?php
			//notifikasi form kosong
			echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

			//notifikasi gagal upload gambar
			if (isset($error_upload)) {
				echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
			}
			echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi) ?>

			<form class="row tracking_form" novalidate="novalidate">
				<div class="col-md-12 form-group">
					<label for="">Atas Nama</label>
					<input type="text" class="form-control" name="atas_nama" placeholder="Atas Nama">
				</div>
				<div class="col-md-12 form-group">
					<label for="">Jumlah Bayar</label>
					<input type="text" class="form-control" name="jml_bayar" placeholder="Jumlah Bayar">
				</div>
				<div class="col-md-12 form-group">
					<label for="">Bukti Bayar</label>
					<input type="file" class="form-control" name="bukti_bayar" placeholder="Bukti Bayar">
				</div>
				<div class="col-md-12 form-group">
					<a href="<?= base_url('pesanan_saya') ?>" class="btn btn-primary btn-sm">Back</a>
					<button type="submit" class="btn btn-success btn-sm">Bayar</button>
				</div>
			</form>
			<?php echo form_close() ?>
		</div>
	</div>
</section>
<!--================End Tracking Box Area =================-->
