<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Siswa baru</h4>
        </div>
        <div class="card-body">
            <form action="/siswa/addkelas" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" required>
                </div>
                <div class="form-group">
                    <label for="siswa_id_kelas">Kelas</label>
                    <input type="text" name="siswa_id_kelas" class="form-control" id="siswa_id_kelas" required>
                </div>
                <div class="form-group">
                    <label for="siswa_nama">Nama Siswa</label>
                    <input type="text" name="siswa_nama" id="siswa_nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="siswa_tahun_angkatan">Tahun Angkatan</label>
                    <input type="number" name="siswa_tahun_angkatan" id="siswa_tahun_angkatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="siswa_tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="siswa_tempat_lahir" id="siswa_tempat_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="siswa_tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="siswa_tanggal_lahir" id="siswa_tanggal_lahir" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="siswa_jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="siswa_jenis_kelamin" id="siswa_jenis_kelamin" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="siswa_agama">Agama</label>
                    <input type="text" name="siswa_agama" id="siswa_agama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="siswa_alamat">Alamat</label>
                    <input type="varchar" name="siswa_alamat" id="siswa_alamat" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>