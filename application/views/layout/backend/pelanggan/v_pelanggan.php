<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data Master Pelanggan</h3>

			<div class="card-tools">
				<!-- <a href="<?= base_url('produk/add') ?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
					Tambah Produk</a> -->
			</div>
			<!-- /.card-tools -->
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
				echo $this->session->flashdata('pesan');
				echo '</h5></div>';
			}
			?>
			<table id="example1" class="table table-bordered" id="example1">
				<thead class="text-center">
					<tr>
						<th>No</th>
						<th>Nama Pelanggan</th>
						<th>Jenis Kelamin</th>
						<th>Usia</th>
						<th>Alamat</th>
						<th>No Telpn</th>
						<th>Jumlah Qty Transaksi</th>
						<th>Total Pembelian</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($pelanggan as $key => $value) { ?>
						<tr class="text-center">
							<td><?= $no++; ?></td>
							<td><?= $value->nama ?></td>
							<td>
								<?php if ($value->jenis_kel = 1) { ?>
									<span class="badge bg-primary">Laki-Laki</span>
								<?php } elseif ($value->jenis_kel = 2) { ?>
									<span class="badge bg-warning">Perempuan</span>
								<?php } ?>
							</td>
							<td><?= $value->usia ?> Tahun</td>
							<td>
								<?= $value->kabupaten ?> <?= $value->kecamatan ?> <?= $value->desa ?> <?= $value->kode_post ?>
							</td>
							<td><?= $value->no_tlpn ?></td>
							<td><?= $value->qty ?></td>
							<td>
								Rp. <?= number_format($value->total_bayar, 0)  ?>
							</td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>