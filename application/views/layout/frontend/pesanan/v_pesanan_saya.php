<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?= $title ?></h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html"><?= $title ?></a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<section class="cart_area">
	<div class="container">
		<div class="cart_inner">
			<div class="card card-primary card-outline">
				<div class="card-body">
					<h4><?= $title ?></h4>
					<div class="row">
						<div class="col-5 col-sm-3">
							<div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Konfirmasi Bayar</a>
								<a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Diproses</a>
								<a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Pengiriman</a>
								<a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Selesai</a>
								<a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-setting" role="tab" aria-controls="vert-tabs-setting" aria-selected="false">Batal Pesanan</a>
							</div>
						</div>
						<div class="col-7 col-sm-9">
							<div class="tab-content" id="vert-tabs-tabContent">
								<div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th>No Order</th>
												<th>Tanggal Order</th>
												<th>Status Pembayaran</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($belum_bayar as $key => $value) { ?>
												<tr>
													<td><a href="<?= base_url('pesanan_saya/detail/' . $value->no_order) ?>"><?= $value->no_order ?></td>
													<td><?= $value->tgl_order ?></td>

													<td>
														<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>

														<?php if ($value->status_bayar == 0) { ?>
															<span class="badge badge-warning">Belum bayar</span><br>
														<?php } else { ?>
															<span class="badge badge-success">Sudah bayar</span><br>
															<span class="badge badge-primary">Menunggu Verifikasi</span>
														<?php }
														if ($value->pembayaran == 1) { ?>
															<span class="badge badge-warning">Bayar Ditempat</span><br>
														<?php }
														if ($value->pasang == 1) { ?>
															<span class="badge badge-info">Pasang Di Tempat</span>
														<?php } elseif ($value->pasang == 2) { ?>
															<span class="badge badge-info">Pasang Di Rumah</span>
														<?php } ?>
													</td>
													<td>
														<?php if ($value->status_bayar == 0 && $value->pembayaran == 2) { ?>
															<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">Bayar</a>
															<button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#dibatalkan<?= $value->id_transaksi ?>">Batalkan</button>
														<?php } ?>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th>No Order</th>
												<th>Tanggal Order</th>
												<th>Total Bayar</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($diproses as $key => $value) { ?>
												<tr>
													<td><?= $value->no_order ?></td>
													<td><?= $value->tgl_order ?></td>
													</td>
													<td>
														<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
														<span class="badge badge-success">Diverifiksi</span><br>
														<span class="badge badge-primary">Dikemas</span>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th>No Order</th>
												<th>Tanggal Order</th>
												<th>Status</th>
												<th>Total Bayar</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($dikirim as $key => $value) { ?>
												<tr>
													<td><?= $value->no_order ?></td>
													<td><?= $value->tgl_order ?></td>
													</td>
													<td><?php if ($value->status_order = 1) { ?>
															<span class="badge badge-warning">Dikirim</span>
														<?php } ?><br>
														<button class="btn btn-primary btn-xs btn-flat" data-toggle="modal" data-target="#diterima<?= $value->id_transaksi ?>">Diterima</button>
													</td>
													<td>
<<<<<<< HEAD
														<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
=======
														<b>Rp. <?= number_format($value->grand_total + $value->total_bayar, 0) ?></b><br>
>>>>>>> 8077a785a79405c4b348786fc56d20497e0571ab
														<span class="badge badge-success">DiKirim</span><br>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th>No Order</th>
												<th>Tanggal Order</th>
												<th>Status</th>
												<th>Total Bayar</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($selesai as $key => $value) { ?>
												<tr>
													<td><a href="<?= base_url('pesanan_saya/detail_selesai/' . $value->no_order) ?>"><?= $value->no_order ?></a></td>
													<td><?= $value->tgl_order ?></td>
													</td>
													<td><?php if ($value->status_order = 2) { ?>
															<span class="badge badge-warning">Selesai</span>
														<?php } ?>
													</td>
													<td>
<<<<<<< HEAD
														<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
=======
														<b>Rp. <?= number_format($value->grand_total + $value->total_bayar, 0) ?></b><br>
>>>>>>> 8077a785a79405c4b348786fc56d20497e0571ab
														<span class="badge badge-success">Selesai</span><br>
													</td>
													<td>
														<a href="<?= base_url('pesanan_saya/detail_selesai/' . $value->no_order) ?>" class="btn btn-success">Riview</a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
								<div class="tab-pane fade" id="vert-tabs-setting" role="tabpanel" aria-labelledby="vert-tabs-setting-tab">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th>No Order</th>
												<th>Tanggal Order</th>
												<th>Catatan</th>
												<th>Total Bayar</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($batalpesan as $key => $value) { ?>
												<tr>
													<td><?= $value->no_order ?></td>
													<td><?= $value->tgl_order ?></td>
													</td>
													<td><?= $value->catatan ?></td>
													<td>
														<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
														<span class="badge badge-danger">Pesanan Dibatalkan</span><br>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
		</div>
		<?php foreach ($dikirim as $key => $value) { ?>
			<div class="modal fade" id="diterima<?= $value->id_transaksi ?>">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Pesanan Diterima</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Apakah Anda Yakin Pesanan Sudah Diterima?
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
							<a href="<?= base_url('pesanan_saya/diterima/' . $value->id_transaksi) ?>" class="btn btn-primary">Ya</a>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		<?php } ?>

		<?php foreach ($belum_bayar as $key => $value) { ?>
			<div class="modal fade" id="dibatalkan<?= $value->id_transaksi ?>">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Pesanan Dibatlkan</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Apakah Anda Yakin Pesanan Dibatalkan?
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
							<a href="<?= base_url('pesanan_saya/dibatalkan/' . $value->id_transaksi) ?>" class="btn btn-primary">Ya</a>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		<?php } ?>
	</div>
</section>