<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					<!-- single-slide -->
					<?php foreach ($best_deal_product_transaksi as $key => $value) { ?>
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><?= $value->nama_produk ?></h1>
									<p><?= $value->deskripsi ?></p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->


<section class="related-product-area section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Produk Terlaris</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php if (count($best_deal_product_transaksi) > 0) : ?>
						<?php foreach ($best_deal_product_transaksi as $key => $value) : ?>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="<?php echo base_url('assets/gambar/' . $value->gambar) ?>" alt="<?= $value->nama_produk ?>" width="
									100px"></a>
									<div class="desc">
										<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="title">Black lace Heels</a>
										<div class="price">
											<h6>Rp. <?= number_format($value->harga) ?></h6>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- start features Area -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?= base_url() ?>karma-master/img/features/f-icon1.png" alt="">
					</div>
					<h6>Free Delivery</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?= base_url() ?>karma-master/img/features/f-icon2.png" alt="">
					</div>
					<h6>Return Policy</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?= base_url() ?>karma-master/img/features/f-icon3.png" alt="">
					</div>
					<h6>24/7 Support</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="<?= base_url() ?>karma-master/img/features/f-icon4.png" alt="">
					</div>
					<h6>Secure Payment</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end features Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1><?= $title ?></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single product -->
				<?php if (count($produk) > 0) : ?>
					<?php foreach ($produk as $value) : ?>
						<div class="col-lg-3 col-md-6">
							<?php
							echo form_open('belanja/add');
							echo form_hidden('id', $value->id_produk);
							echo form_hidden('qty', 1);
							echo form_hidden('price', $value->harga - $value->diskon);
							echo form_hidden('name', $value->nama_produk);
							echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
							?>
							<div class="single-product">
								<img class="img-fluid" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="<?= $value->nama_produk ?>">
								<div class="product-details">
									<h6><?= $value->nama_produk ?></h6>
									<div class="price">
										<p class="price"><?php if ($value->diskon > 0) : ?>
												<span class="mr-2 l-through">Rp. <?= number_format($value->harga, 0); ?></span><span class="price-sale">Rp. <?= number_format($value->harga - $value->diskon, 0); ?></span>
											<?php else : ?>
												<span class="mr-2"><span class="price-sale">Rp. <?= number_format($value->harga - $value->diskon, 0); ?></span>
												<?php endif; ?>
										</p>
									</div>
									<div class="prd-bottom">

										<button type="submit" class="btn social-info" data-name="<?= $value->nama_produk; ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk; ?>">
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
		</div>
	</div>
	<!-- single product slide -->
	<div class="single-product-slider">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1><?= $title ?></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php if (count($produk) > 0) : ?>
					<?php foreach ($produk as $value) : ?>
						<div class="col-lg-3 col-md-6">
							<?php
							echo form_open('belanja/add');
							echo form_hidden('id', $value->id_produk);
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
										<p class="price"><?php if ($value->diskon > 0) : ?>
												<span class="mr-2 l-through">Rp. <?= number_format($value->harga, 0); ?></span><span class="price-sale">Rp. <?= number_format($value->harga - $value->diskon, 0); ?></span>
											<?php else : ?>
												<span class="mr-2"><span class="price-sale">Rp. <?= number_format($value->harga - $value->diskon, 0); ?></span>
												<?php endif; ?>
										</p>
									</div>
									<div class="prd-bottom">

										<button type="submit" class="btn social-info" data-name="<?= $value->nama_produk; ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk; ?>">
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
		</div>
	</div>
</section>
<!-- end product Area -->



<!-- Start brand Area -->
<section class="brand-area section_gap">
	<div class="container">
		<div class="row">
		</div>
	</div>
</section>
<!-- End brand Area -->

<!-- Start related-product Area -->
<section class="related-product-area section_gap_bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Deals of the Week</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<div class="row"><?php foreach ($diskon as $key => $value) { ?>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<?php echo form_open('belanja/add');
										echo form_hidden('id', $value->id_produk);
										echo form_hidden('qty', 1);
										echo form_hidden('price', $value->harga - $value->diskon);
										echo form_hidden('name', $value->nama_produk);
										echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
								?>
								<a href="<?= base_url('home/detail_produk') ?>"><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" width="100px"></a>
								<div class="desc">
									<a href="<?= base_url('home/detail_produk') ?>" class="title"><?= $value->nama_produk ?></a>
									<div class="price">
										<h6>Rp. <?= number_format($value->diskon, 0) ?></h6>
										<h6 class="l-through">Rp. <?= number_format($value->harga, 0) ?></h6>
									</div>
								</div>
								<?php echo form_close() ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="ctg-right">
					<a href="#" target="_blank">
						<img class="img-fluid d-block mx-auto" src="<?= base_url() ?>karma-master/img/category/c5.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End related-product Area -->