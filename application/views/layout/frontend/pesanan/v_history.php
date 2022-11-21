<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Konfirmasi</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Beranda<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Konfirmasi</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<h3 class="title_confirmation">Hostory Pembelian.</h3>

		<div class="order_details_table">
			<h2>Detail History</h2>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Product</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($history as $key => $value) { ?>
							<tr>
								<td>
									<p><?= $value->nama_produk ?></p>
								</td>
								<td>
									<h5>x <?= $value->qty ?></h5>
								</td>
								<td>
									<p>Rp. <?= number_format($value->harga * $value->qty - $value->diskon, 0) ?></p>
								</td>
							</tr>
						<?php } ?>
						<tr>
							<td>
								&nbsp;
							</td>
							<td>
								<h4>Biaya Pemasangan</h4>
							</td>
							<td>
								<p>Rp. <?= number_format($value->ongkir, 0) ?></p>
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;
							</td>
							<td>
								<h4>Total</h4>
							</td>
							<td>
								<p>Rp. <?= number_format($value->total_bayar, 0) ?></p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<a href="<?= base_url('') ?>" class="primary-btn">Kembali</a>
		<!-- <?php if ($value->pembayaran == 2) { ?>
			<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="primary-btn">Bayar</a>
		<?php } ?> -->
	</div>
</section>
<!--================End Order Details Area =================-->