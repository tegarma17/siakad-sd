<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('kelas');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Kelas : </h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kelas/update');?>">
                <div class="form-group">
                    <label for="">Nama Kelas</label>
                    <input type="text" value="<?= $kelas->kelas_nama;?>" name="kelas_nama" id="kelas_nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tahun  Ajaran</label>
                    <input type="number" value="<?= $kelas->kelas_tahun_ajaran;?>" name="kelas_tahun_ajaran" id="kelas_tahun_ajaran" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Semester</label>
                    <input type="number" value="<?= $kelas->kelas_semester;?>" name="kelas_semester" id="kelas_semester" required class="form-control">
                </div>

                <input type="hidden" value="<?= $kelas->kelas_id;?>" name="kelas_id">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>


<?= $this->endSection(); ?>