<?= $this->extend('default');

$this->section('content'); ?>
<div class="container my-4">
    <div class="card">
        <div class="card-header">
            <h3>Update Barang</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('/barang/update/' . $barang['id_barang']) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang'] ?>" />
        </div>

        <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?= $barang['harga_beli'] ?>" />
        </div>

        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $barang['harga_jual'] ?>" />
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" step="1" class="form-control" id="stok" name="stok" value="<?= $barang['stok'] ?>" />
        </div>

        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-pink" />
        </div>

        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>