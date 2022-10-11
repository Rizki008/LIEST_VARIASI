<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Konfirmasi</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Konfirmasi</a>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<h3 class="title_confirmation">Silahkan Lakukan Pembayaran.</h3>
		<div class="row order_d_inner">
			<div class="col-lg-4">
				<?php foreach ($info as $key => $value) { ?>
					<div class="details_item">
						<h4>Informasi Pesanan</h4>
						<ul class="list">
							<li><a href="#"><span>Nama :</span> : <?= $value->nama ?></a></li>
							<li><a href="#"><span>No Order</span> : <?= $value->no_order ?></a></li>
							<li><a href="#"><span>Alamat</span> : <?= $value->alamat ?></a></li>
							<li><a href="#"><span>Total</span> : Rp. <?= number_format($value->total_bayar, 0) ?></a></li>
							<li><a href="#"><span>Metode Pembayaran</span> : <?php if ($value->pembayaran == 1) { ?>
										<span>Bayar Ditempat</span>
									<?php } else { ?>
										<span>Transfer</span>
									<?php } ?></a></li>
						</ul>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="order_details_table">
			<h2>Detail Pesanan</h2>
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
						<?php foreach ($pesanan_detail as $key => $value) { ?>
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
		<a href="<?= base_url('pesanan_saya') ?>" class="primary-btn">Kembali</a>
		<?php if ($value->pembayaran == 2) { ?>
			<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="primary-btn">Bayar</a>
		<?php } ?>
	</div>
</section>
<!--================End Order Details Area =================-->