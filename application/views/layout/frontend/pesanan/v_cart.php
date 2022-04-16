<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Shopping Cart</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Cart</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
	<div class="container">
		<div class="cart_inner">
			<?php echo form_open('belanja/update') ?>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Product</th>
							<th scope="col">Price</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>

						<?php $total_berat = 0;
						$total = 0;
						foreach ($this->cart->contents() as $items) {
							$produk = $this->m_home->detail_produk($items['id']);
							// $berat = $items['qty'] * $produk->berat;
							// $total_berat =  $total_berat + $berat;
						?>
							<tr>
								<td>
									<div class="media">
										<div class="d-flex">
											<img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" width="200px">
										</div>
										<div class="media-body">
											<p><?php echo $items['name'] ?></p>
										</div>
									</div>
								</td>
								<td>
									<h5>Rp. <?= number_format($items['price']) ?></h5>
								</td>
								<td>
									<div class="product_count">
										<?php echo form_input(
											array(
												'name' => $i . '[qty]',
												'value' => $items['qty'],
												'maxlength' => '3',
												'min' => '0',
												'max' => 'stock',
												'size' => '5',
												'type' => 'number',
												'class' => 'form-control'
											)
										); ?>
									</div>
								</td>
								<td class="total">
									Rp. <?= number_format($items['subtotal']); ?>
								</td>
								<td>
									<!-- <input type="checkbox" name="nama_produk[]" checked="checked" value="<?php echo $items['name'] ?>"> -->
									<a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="remove-item badge-danger"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php } ?>
						<tr class="bottom_button">
							<td>
								<button class="gray_btn">Update Cart</button>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
							</td>
							<td>
								<h5>Subtotal</h5>
							</td>
							<td>
								<h5>Rp. <?= number_format($this->cart->total(), 0) ?></h5>
							</td>
						</tr>
						<tr class="out_button_area">
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="checkout_btn_inner d-flex align-items-center">
									<a class="gray_btn" href="<?= base_url() ?>">Belanja</a>
									<a class="primary-btn" href="<?= base_url('belanja/cekout') ?>">Proceed to checkout</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</section>
<!--================End Cart Area =================-->
