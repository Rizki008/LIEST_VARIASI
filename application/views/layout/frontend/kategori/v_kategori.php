<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?= $title ?></h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Beranda<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Kategori<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html"><?= $title ?></a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-11 col-md-10">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting">

				</div>
				<div class="sorting mr-auto">

				</div>
				<div class="pagination">

				</div>
			</div>
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					<?php if (count($produk) > 0) : ?>
						<?php foreach ($produk as $value) :

						?>
							<div class="col-lg-4 col-md-6">
								<?php
								echo form_open('belanja/add');
								echo form_hidden('id', $value->id_produk);
								// echo form_hidden('id_produk', $value->id_produk);
								echo form_hidden('qty', 1);
								echo form_hidden('price', $value->harga);
								echo form_hidden('name', $value->nama_produk);
								echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
								?>
								<div class="single-product">
									<img class="img-fluid" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="<?= $value->nama_produk ?>">
									<div class="product-details">
										<h6><?= $value->nama_produk ?></h6>
										<div class="price">
											<h6>Rp. <?= number_format($value->harga) ?></h6>
										</div>
										<div class="prd-bottom">

											<button type="submit" class="btn social-info swalDefaultSuccess" data-name="<?= $value->nama_produk ?>" data-price="<?= $value->harga ?>" data-id="<?= $value->id_produk ?>">
												<span class="ti-bag"></span>
												<p class="hover-text">add to bag</p>
											</button>
											<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="btn social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>
											</a>
										</div>
									</div>
								</div>
								<?php echo form_close() ?>
							</div>
						<?php endforeach; ?>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</section>
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting mr-auto">
				</div>
				<div class="pagination">
				</div>
			</div>
		</div>
	</div>
</div>