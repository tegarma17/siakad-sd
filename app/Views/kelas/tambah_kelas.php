<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Kelas baru</h4>
        </div>
        <div class="card-body">
            <form action="/kelas/addkelas" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="kelas_id">ID KELAS</label>
                    <input type="text" name="kelas_id" class="form-control" id="kelas_id" required>
                </div>
                <div class="form-group">
                    <label for="kelas_nama">Nama Kelas</label>
                    <input type="text" name="kelas_nama" class="form-control" id="kelas_nama" required>
                </div>
                <div class="form-group">
                    <label for="kelas_tahun_ajaran">Tahun Ajaran</label>
                    <input type="number" name="kelas_tahun_ajaran" id="kelas_tahun_ajaran" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kelas_semster">Semester</label>
                    <input type="number" name="kelas_semester" id="kelas_semester" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>



<?= $this->endSection(); ?>