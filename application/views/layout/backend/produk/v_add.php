<!-- right column -->
<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Tambah Produk</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
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
			echo form_open_multipart('produk/add') ?>
			<!-- text input -->
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Nama Produk</label>
						<input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk" value="<?= set_value('nama_produk') ?>">
					</div>
				</div>

				<div class="col-sm-4">
					<div class="form-group">
						<label>Nama Kategori Produk</label>
						<select name="id_kategori" class="form-control">
							<option value="">---Pilih Kategori Produk---</option>
							<?php foreach ($kategori as $key => $value) { ?>
								<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Harga Produk</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga Produk" value="<?= set_value('harga') ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Stock</label>
						<input name="stock" type="number" min="0" class="form-control" placeholder="stock Produk" value="<?= set_value('stock') ?>">
					</div>
				</div>
			</div>
			<!-- text input -->
			<div class="form-group">
				<label>Deskripsi Produk</label>
				<textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi Produk"><?= set_value('deskripsi') ?></textarea>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Gambar Produk</label>
						<input type="file" name="gambar" class="form-control" id="preview_gambar" required>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/nopoto.jpg') ?>" id="gambar_load" width="400px">
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

<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>