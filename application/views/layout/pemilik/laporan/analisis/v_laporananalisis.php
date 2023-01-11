<div class="col-md-6">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Laporan Analisis Usia</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			echo form_open('laporananalisis/lap_usia') ?>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tanggal</label>
						<select name="tanggal" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 31; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Bulan</label>
						<select name="bulan" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 12; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tahun</label>
						<select name="tahun" class="form-control">
							<?php
							$mulai = date('Y') - 1;
							for ($i = $mulai; $i < $mulai + 10; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
					</div>
				</div>
			</div>
			<?php
			echo form_close() ?>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
<div class="col-md-6">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Laporan Analisis Alamat</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			echo form_open('laporananalisis/lap_alamat') ?>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tanggal</label>
						<select name="tanggal" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 31; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Bulan</label>
						<select name="bulan" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 12; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tahun</label>
						<select name="tahun" class="form-control">
							<?php
							$mulai = date('Y') - 1;
							for ($i = $mulai; $i < $mulai + 10; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
					</div>
				</div>
			</div>
			<?php
			echo form_close() ?>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
<div class="col-md-6">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Laporan Analisis Jenis Kelamin</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			echo form_open('laporananalisis/lap_jk') ?>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tanggal</label>
						<select name="tanggal" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 31; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Bulan</label>
						<select name="bulan" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 12; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tahun</label>
						<select name="tahun" class="form-control">
							<?php
							$mulai = date('Y') - 1;
							for ($i = $mulai; $i < $mulai + 10; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
					</div>
				</div>
			</div>
			<?php
			echo form_close() ?>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>


<div class="col-md-6">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Laporan Pelanggan</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			echo form_open('laporananalisis/lap_pelanggan') ?>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tanggal</label>
						<select name="tanggal" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 31; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Bulan</label>
						<select name="bulan" class="form-control">
							<?php
							$mulai = 1;
							for ($i = $mulai; $i < $mulai + 12; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tahun</label>
						<select name="tahun" class="form-control">
							<?php
							$mulai = date('Y') - 1;
							for ($i = $mulai; $i < $mulai + 10; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
					</div>
				</div>
			</div>
			<?php
			echo form_close() ?>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
