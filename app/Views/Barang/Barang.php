<?= $this->extend('default');

$this->section('content'); ?>
<div class="container my-4">
    <div class="card">
        <div class="card-header">
            <h3>Data Barang</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/barang/create'); ?>" type="button" class="btn btn-pink">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($barang as $barang) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $barang['nama_barang'] ?></td>
                        <td><?= $barang['harga_beli'] ?></td>
                        <td><?= $barang['harga_jual'] ?></td>
                        <td><?= $barang['stok'] ?></td>
                        <td>
                            <a href="<?= base_url('/barang/edit/' . $barang['id_barang']) ?>" class="btn btn-pink">Edit</a>
                            <a href="<?= base_url('/barang/delete/' . $barang['id_barang']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>