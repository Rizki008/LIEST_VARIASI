<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?= $title ?></h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.html"><?= $title ?></a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="s_Product_carousel">
					<div class="single-prd-item">
						<img class="img-fluid" src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3><?= $produk->nama_produk ?></h3>
					<h2>Rp. <?= number_format($produk->harga - $produk->diskon) ?></h2>
					<ul class="list">
						<li><a class="active" href="#"><span>Category</span> : <?= $produk->nama_kategori ?></a></li>
						<li><a href="#"><span>Availibility</span> : <?= $produk->stock ?></a></li>
					</ul>
					<p><?= $produk->deskripsi ?></p>
					<?php echo form_open('belanja/add');
					echo form_hidden('id', $produk->id_produk);
					echo form_hidden('price', $produk->harga - $produk->diskon);
					echo form_hidden('name', $produk->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="product_count">
						<label for="qty">Quantity:</label>
						<input type="number" id="quantity" name="qty" class="form-control" value="1" min="1" max="<?= $produk->stock ?>">
					</div>
					<div class="card_area d-flex align-items-center">
						<button type="submit" class="primary-btn" data-name="<?= $produk->nama_produk ?>" data-price="<?= ($produk->diskon > 0) ? ($produk->harga - $produk->diskon) : $produk->harga ?>" data-id="<?= $produk->id_produk ?>">Add to Cart</button>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
					and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
					Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
					London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
					officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
					job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
					showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
					child’s painting set for her birthday and it was with this that she produced her first significant work, a
					half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
					named ‘Hangover’ by Beryl’s husband and</p>
				<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
					more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
					the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
					more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
					streamlined plan of cooking that is more efficient for one person creating less</p>
			</div>
			<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
				<div class="row">
					<div class="col-lg-12">
						<div class="review_list">
							<?php foreach ($reviews as $key => $value) { ?>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4><?= $value->nama ?></h4>
											<i class="fa fa-clock"><?= $value->tanggal ?></i>
										</div>
									</div>
									<p><?= $value->isi ?></p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Product Description Area =================-->

<!-- Start related-product Area -->
<section class="related-product-area section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Produk Lainnya</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php if (count($related_products) > 0) : ?>
						<?php foreach ($related_products as $products) : ?>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-related-product d-flex">
									<a href="#"><img src="<?php echo base_url('assets/gambar/' . $products->gambar) ?>" alt="<?= $products->nama_produk ?>" width="
									100px"></a>
									<div class="desc">
										<a href="<?= base_url('home/detail_produk/' . $products->id_produk) ?>" class="title">Black lace Heels</a>
										<div class="price">
											<h6>Rp. <?= number_format($products->harga) ?></h6>
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
<!-- End related-product Area -->