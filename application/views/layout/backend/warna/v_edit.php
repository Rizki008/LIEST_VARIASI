<!-- right column -->
<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Warna</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            ///notifikasi form kosong
            echo validation_errors('<div class="alert alert-warning alert-st-three alert-st-bg2 alert-st-bg13" role="alert">
                                <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2 admin-check-pro-clr13" aria-hidden="true"></i>
                                <p class="message-mg-rt"><strong>Warning!</strong>', '</p></div>');

            //notifikasi gagal upload gambar
            if (isset($error_upload)) {
                echo '<div class="alert alert-warning alert-success-style3 alert-st-bg2">
                                    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                    <i class="fa fa-exclamation-triangle adminpro-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                                    <p><strong>Warning!</strong>' . $error_upload . '</p></div>';
            }
            echo form_open_multipart('warna/edit_warna/' . $warna->id_warna . '/' . $warna->id_produk) ?>
            <!-- text input -->
            <div class="form-group">
                <label>Warna Produk</label>
                <input type="text" class="form-control" placeholder="Warna Produk" name="warna" value="<?= $warna->warna ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?= base_url('warna/warna_produk/' . $warna->id_produk) ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>

            <?php echo form_close() ?>
        </div>
    </div>
</div>