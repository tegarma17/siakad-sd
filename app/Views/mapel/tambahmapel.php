<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('/mapel'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Guru Baru</h4>
        </div>
        <div class="card-body">
            <form action="/mapel/addmapel" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="mapel_id">ID Mata Pelajran</label>
                    <input type="number" name="mapel_id" class="form-control" id="mapel_id" required>
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="number" name="nisn" class="form-control" id="nisn" required>
                </div>
                <div class="form-group">
                    <label for="mapel_nama">Mata Pelajaran</label>
                    <input type="text" name="mapel_nama" id="mapel_nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mapel_kkm">KKM</label>
                    <input type="text" name="mapel_kkm" id="mapel_kkm" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>