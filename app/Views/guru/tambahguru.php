<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('/guru'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Guru Baru</h4>
        </div>
        <div class="card-body">
            <form action="/guru/addguru" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" class="form-control" id="nip" required>
                </div>
                <div class="form-group">
                    <label for="guru_id_kelas">Kelas</label>
                    <input type="text" name="guru_id_kelas" class="form-control" id="guru_id_kelas" required>
                </div>
                <div class="form-group">
                    <label for="guru_nama">Nama guru</label>
                    <input type="text" name="guru_nama" id="guru_nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru_tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="guru_tempat_lahir" id="guru_tempat_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="guru_tanggal_lahir" id="guru_tanggal_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru_jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="guru_jenis_kelamin" id="guru_jenis_kelamin" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru_status">Status</label>
                    <input type="text" name="guru_status" id="guru_status" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="guru_agama">Agama</label>
                    <input type="text" name="guru_agama" id="guru_agama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="guru_alamat">Alamat</label>
                    <input type="varchar" name="guru_alamat" id="guru_alamat" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>