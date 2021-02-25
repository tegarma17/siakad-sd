<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Kelas baru</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kelas/addkelas'); ?>">
                <div class="form-group">
                    <label for="">ID KELAS</label>
                    <input type="text" name="kelas_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Qty</label>
                    <input type="number" name="kelas_nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Beli</label>
                    <input type="number" name="beli" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Harga Jual</label>
                    <input type="number" name="jual" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>



<?= $this->endSection(); ?>