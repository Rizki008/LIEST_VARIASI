<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Beli</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Beranda<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html">Beli</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
	<div class="container">
		<div class="billing_details">
			<?php
			if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="fa fa-check text-success"></i>';
				echo $this->session->flashdata('pesan');
				echo '</h5></div>';
			}
			?>
			<?php
			echo validation_errors('<div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
			?>
			<?php
			$no_order = date('Ymd') . strtoupper(random_string('alnum', 9)); ?>
			<div class="row">
				<div class="col-lg-8">
					<h3>Beli Pesanan</h3>
					<form class="row contact_form" action="<?= base_url('belanja/cekout') ?>" method="post" novalidate="novalidate">
						<div class="col-md-6 form-group p_star">
							<label for="">Nama Pemesan</label>
							<input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?= $this->session->userdata('nama'); ?>" disabled>
						</div>
						<div class="col-md-6 form-group p_star">
							<label for="">No Telepon</label>
							<input type="number" class="form-control" id="no_tlpn" name="no_tlpn" value="<?= $this->session->userdata('no_tlpn'); ?>" disabled>
						</div>
						<div class="col-md-6 form-group p_star">
							<label for="">Metode Pembayaran</label><br>
							<select name="pembayaran" id="pembayaran">
								<option value="1">Bayar DItempat</option>
								<option value="2">Transfer</option>
							</select>
						</div>
						<div class="col-md-6 form-group p_star">
							<label for="">Jenis Pemasangan</label><br>
							<select name="id_lokasi" id="ongkir">
								<option value="">--Pilih Pemasangan--</option>
								<?php foreach ($lokasi as $key => $value) { ?>
									<option value="<?= $value->id_lokasi ?>" data-ongkir=<?= $value->ongkir ?> data-total=<?= $this->cart->total() +  $value->ongkir ?>><?= $value->nama_biaya ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-12 form-group">
							<label for="">Alamat Pengiriman</label>
							<textarea class="form-control" name="alamat" id="alamat" rows="1" placeholder="Alamat Lengkap" required></textarea>
						</div>

				</div>
				<div class="col-lg-4">
					<div class="order_box">
						<h2>No Rekening Pembayaran</h2>
						<?php $i = 1; ?>
						<?php $total_belanja = 0;
						foreach ($this->cart->contents() as $items) {
							$produk = $this->m_home->detail_produk($items['id']);
							// $berat = $items['qty'] * $produk->berat;
							// $total_berat =  $total_berat + $berat;
						?>
						<?php } ?>
						<ul class="list list_2">
							<?php foreach ($rekening as $key => $value) { ?>
								<li><a href="#"><span><?= $value->nama_bank ?><span></a></li>
								<li><a href="#"></span></a></li>
								<li><span><?= $value->no_rek ?></span></li>
								<li><span><?= $value->atas_nama ?></span></li>
							<?php } ?>
							<li><a href="#">Total Bayar <span>Rp. <?php echo $this->cart->format_number($this->cart->total(), 0) ?></span></a></li>
							<li><a href="#">Biaya Tambahan <span>Rp. <label class="ongkir"></label></span></a></li>
							<li><a href="#">Total Pembayaran<span>Rp. <label class="total"></label></span></a></li>
						</ul>

						<input name="grand_total" value="<?php echo $this->cart->total() ?>" hidden>
						<input name="no_order" value="<?= $no_order ?>" hidden>
						<input name="ongkir" class="ongkir" hidden>
						<input name="total_bayar" class="total" hidden>

						<!--simpan Rinci transaksi-->
						<?php
						$i = 1;
						foreach ($this->cart->contents() as $items) {
							echo form_hidden('qty' . $i++, $items['qty']);
						}
						?>
						<button type="submit" class="primary-btn">Beli</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</section>
<!--================End Checkout Area =================-->