<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data Warna</h3>
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
						<th>Gambar Produk</th>
						<th>Warna</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($warna['warna'] as $key => $value) { ?>
						<tr>
							<td><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="150px"></td>
							<td><?= $value->warna ?></td>
							<td>
								<a href="<?= base_url('warna/edit_warna/' . $value->id_warna . '/' . $value->id_produk) ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt"></i></a>
								<a href="<?= base_url('warna/delete_warna/' . $value->id_warna . '/' . $value->id_produk) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
							</td>
						</tr>
					<?php }
					?>
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>


<!-- right column -->
<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Warna Produk</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			//notifikasi form kosong
			echo validation_errors('<div class="alert alert-warning alert-st-three alert-st-bg2 alert-st-bg13" role="alert">
                                <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2 admin-check-pro-clr13" aria-hidden="true"></i>
                                <p class="message-mg-rt"><strong>Warning!</strong>', '</p></div>');

			//notifikasi gagal upload gambar
			if (isset($error_upload)) {
				echo '<div class="alert alert-warning alert-success-style3 alert-st-bg2">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                    <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                                    <p><strong>Warning!</strong>' . $error_upload . '</p></div>';
			}
			echo form_open_multipart('warna/warna_produk/' . $warna['produk']->id_produk) ?>
			<!-- text input -->
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Warna Produk</label>
						<input name="warna" type="text" class="form-control" placeholder="Nama Warna" value="<?= set_value('warna') ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				<a href="<?= base_url('produk') ?>" class="btn btn-warning btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>