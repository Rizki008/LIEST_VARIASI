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
            <div class="col-lg-12 posts-list">
                <div class="comments-area">
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
                                        <textarea name="isi" id="isi" cols="90" rows="10"></textarea>
                                        <!-- <input name="isi" class="form-control" cols="100" rows="100" placeholder="isi Riview" required></input> -->
                                        <br><button type="submit" class="btn btn-success">Riview</button>
                                    </div>
                                </div>

                            </div>
                            <?php echo form_close() ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->