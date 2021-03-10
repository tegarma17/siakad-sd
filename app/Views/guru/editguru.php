<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container p-5">
    <a href="<?= base_url('guru');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data guru : </h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('guru/update');?>">
                <div class="form-group">
                    <label for="">Nama guru</label>
                    <input type="text" value="<?= $guru->guru_nama;?>" name="guru_nama" id="nama_nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" value="<?= $guru->guru_tempat_lahir;?>" name="guru_tempat_lahir" id="guru_tempat_lahir" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" value="<?= $guru->guru_tanggal_lahir;?>" name="guru_tanggal_lahir" id="guru_tanggal_lahir" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" value="<?= $guru->guru_jenis_kelamin;?>" name="guru_jenis_kelamin" id="guru_jenis_kelamin" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" value="<?= $guru->guru_status;?>" name="guru_agama" id="guru_agama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <input type="text" value="<?= $guru->guru_agama;?>" name="guru_agama" id="guru_agama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $guru->guru_alamat;?>" name="guru_alamat" id="guru_alamat" required class="form-control">
                </div>
                <input type="hidden" value="<?= $guru->nip;?>" name="nisn">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>


<?= $this->endSection(); ?>