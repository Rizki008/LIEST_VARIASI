<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Kritik Saran</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url() ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Blog</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php foreach ($pesanan_detail as $key => $value) { ?>
                    <div class="row total_rate">
                        <div class="col-6">
                            <div class="box_total">
                                <div class="thumb">
                                    <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" width="200px">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="rating_list">
                                <h3><?= $value->nama_produk ?></h3>
                                <ul class="list">
                                    <li><a href="#">Tanggal Order : <?= $value->tgl_order ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-6">
                <div class="review_box">
                    <h4>Terima kasih. pesanan Anda telah diterima</h4>
                    <p>Your Rating:</p>
                    <ul class="list">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <p>Outstanding</p>
                    <form class="row contact_form" action="<?= base_url('pesanan_saya/insert_riview') ?>" method="post" id="contactForm" novalidate="novalidate">
                        <input name="id_produk" class="form-control" cols="30" rows="10" placeholder="isi Produk" value="<?= $value->id_produk ?>" required hidden></input>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="isi" id="isi" rows="1" placeholder="Review" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary-btn">Riview</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-lg-12 posts-list">
                <div class="comments-area">
                    <h4>Terima kasih. pesanan Anda telah diterima</h4>
                    <h4>Kritik Saran</h4>
                    <div class="comment-list">
                        <?php foreach ($pesanan_detail as $key => $value) { ?>
                            <?php echo form_open_multipart('pesanan_saya/insert_riview') ?>
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" width="200px">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#"><?= $value->nama_produk ?></a></h5>
                                        <p class="date"><?= $value->tgl_order ?> </p>
                                        <input name="id_produk" class="form-control" cols="30" rows="10" placeholder="isi Produk" value="<?= $value->id_produk ?>" required hidden></input>
                                        <textarea name="isi" id="isi" cols="90" rows="10"></textarea> -->
            <!-- <input name="isi" class="form-control" cols="100" rows="100" placeholder="isi Riview" required></input> -->
            <!-- <br><button type="submit" class="btn btn-success">Riview</button>
                                    </div>
                                </div>

                            </div>
                            <?php echo form_close() ?>
                        <?php } ?>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================Blog Area =================-->