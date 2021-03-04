<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('siswa');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Siswa : </h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('siswa/update');?>">
                <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <input type="text" value="<?= $siswa->siswa_nama;?>" name="siswa_nama" id="nama_nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tahun  Angkatan</label>
                    <input type="number" value="<?= $siswa->siswa_tahun_angkatan;?>" name="siswa_tahun_angkatan" id="kelas_tahun_ajaran" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" value="<?= $siswa->siswa_tempat_lahir;?>" name="siswa_tempat_lahir" id="siswa_tempat_lahir" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="number" value="<?= $siswa->siswa_tanggal_lahir;?>" name="siswa_tanggal_lahir" id="siswa_tanggal_lahir" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" value="<?= $siswa->siswa_jenis_kelamin;?>" name="siswa_jenis_kelamin" id="siswa_jenis_kelamin" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <input type="text" value="<?= $siswa->siswa_agama;?>" name="siswa_agama" id="siswa_agama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $siswa->siswa_alamat;?>" name="siswa_alamat" id="siswa_alamat" required class="form-control">
                </div>
                <input type="hidden" value="<?= $siswa->$nisn;?>" name="nisn">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>


<?= $this->endSection(); ?>