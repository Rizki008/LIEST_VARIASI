<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1><?= $title ?></h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Beranda<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html"><?= $title ?></a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom">
	<div class="container">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-lg-3">
				<div class="contact_info">
					<?php foreach ($chat as $key => $value) {
						if ($value->pesan != '0') {
					?>
							<div class="info_item">
								<i class="lnr lnr-home"></i>
								<h6><?= $value->nama ?></h6>
								<p><?= $value->time_chatting ?></p>
								<p><?= $value->pesan ?></p>
							</div>
						<?php } elseif ($value->balas != '0') { ?>
							<div class="info_item">
								<i class="lnr lnr-phone-handset"></i>
								<h6><a href="#">Admin</a></h6>
								<p><?= $value->time_chatting ?></p>
								<br>
								<p><?= $value->balas ?></p>
							</div>
					<?php }
					}
					?>
				</div>
			</div>
			<div class="col-lg-9">
				<form class="row contact_form" action="<?= base_url('chatting_pelanggan') ?>" method="post" id="contactForm" novalidate="novalidate">
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" name="pesan" id="pesan" rows="1" placeholder="Enter pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter pesan'"></textarea>
						</div>
						<button type="submit" value="submit" class="primary-btn">Kirim Pesan</button>
					</div>
					<div class="col-md-12 text-right">

					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->