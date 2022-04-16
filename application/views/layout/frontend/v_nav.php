<nav class="navbar navbar-expand-lg navbar-light main_box">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<a class="navbar-brand logo_h" href="<?= base_url() ?>"><img src="<?= base_url() ?>karma-master/img/logo.png" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
			<?php $keranjang = $this->cart->contents();
			$jml_item = 0;
			foreach ($keranjang as $key => $value) {
				$jml_item = $jml_item + $value['qty'];
			}
			?>
			<ul class="nav navbar-nav menu_nav ml-auto">
				<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
				<?php $kategori = $this->m_home->kategori_produk(); ?>
				<li class="nav-item submenu dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori Produk</a>
					<ul class="dropdown-menu">
						<?php foreach ($kategori as $key => $value) { ?>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>
						<?PHP } ?>

					</ul>
				</li>
				<li class="nav-item submenu dropdown">
					<?php if ($this->session->userdata('email') == "") { ?>
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/register') ?>">Login/Register</a></li>
						</ul>
					<?php } else { ?>
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('nama'); ?></a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="<?= base_url('pesanan_saya') ?>">Pesanan Saya</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('chatting_pelanggan') ?>">Cheting</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/logout') ?>">Logout</a></li>
						</ul>
					<?php } ?>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a href="<?= base_url('belanja') ?>" class="cart"><span class="ti-bag"></span>[<?= $jml_item ?>]</a></li>
				<!-- <li class="nav-item">
					<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
				</li> -->
			</ul>
		</div>
	</div>
</nav>
</div>
<div class="search_input" id="search_input_box">
	<div class="container">
		<form class="d-flex justify-content-between">
			<input type="text" class="form-control" id="search_input" placeholder="Search Here">
			<button type="submit" class="btn"></button>
			<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
		</form>
	</div>
</div>
</header>
<!-- End Header Area -->
