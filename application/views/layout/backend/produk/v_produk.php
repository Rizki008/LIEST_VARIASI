<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data Produk</h3>

			<div class="card-tools">
				<a href="<?= base_url('produk/add') ?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
					Tambah Produk</a>
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
						<th>Nama Produk</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Deskripsi</th>
						<th>Gambar</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($produk as $key => $value) { ?>
						<tr class="text-center">
							<td><?= $no++; ?></td>
							<td><?= $value->nama_produk ?></td>
							<td><?= $value->nama_kategori ?></td>
							<td>Rp. <?= number_format($value->harga, 0) ?></td>
							<td>
								<?php if ($value->stock <= 50) { ?>
									<span class="badge bg-danger"><?= $value->stock ?></span>
								<?php } elseif ($value->stock <= 100) { ?>
									<span class="badge bg-warning"><?= $value->stock ?></span>
								<?php } else { ?>
									<span class="badge badge-success"><?= $value->stock ?></span><br>
								<?php } ?>
							</td>
							<td><?= $value->deskripsi ?></td>
							<td><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="150px"></td>
							<td>
								<a href="<?= base_url('warna/warna_produk/' . $value->id_produk) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt"></i></a>
								<a href="<?= base_url('produk/edit/' . $value->id_produk) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_produk ?>"><i class="fa fa-trash"></i></button>
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


<!-- /.modal Delete -->
<?php foreach ($produk as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_produk ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Hapus <?= $value->nama_produk ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					<a href="<?= base_url('produk/delete/' . $value->id_produk) ?> " class="btn btn-primary">Hapus</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>