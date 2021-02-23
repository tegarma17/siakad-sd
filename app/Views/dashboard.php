<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container box">
    <div class="row mt-5 text-white">
        <div class="col-md-2 box-button align-items-center ">
            <div class="d-flex justify-content-center flex-column siswa">
                <i class="fas fa-user fa-7x"></i>
                <a class="tulisan-link" href="<?= base_url('siswa'); ?>">
                    <h1>Data Siswa</h1>
                </a>
            </div>
        </div>
        <div class="col-md-2 box-button-2 align-items-center">
            <div class="d-flex flex-column guru">
                <i class="fas fa-user-graduate fa-7x"></i>
                <a class="tulisan-link" href="<?= base_url('guru'); ?>">
                    <h1>Data Guru</h1>
                </a>
            </div>
        </div>

        <div class="col-md-2 box-button-3 align-items-center ">
            <div class="d-flex justify-content-center flex-column nilai">
                <i class="fas fa-clipboard-list fa-8x"></i>
                <a class="tulisan-link" href="#">
                    <h1>Nilai</h1>
                </a>
            </div>
        </div>

        <div class="col-md-2 box-button-4 align-items-center">
            <div class="d-flex justify-content-center flex-column kelas">
                <i class="fas fa-building fa-7x"></i>
                <a class="tulisan-link" href="<?= base_url('kelas'); ?>">
                    <h1>Kelas</h1>
                </a>
            </div>
        </div>
        <div class="col-md-2 box-button-5 align-items-center ">
            <div class="d-flex justify-content-center flex-column mapel">
                <i class="fas fa-book-open fa-7x"></i>
                <a class="tulisan-link" href="<?= base_url('mapel'); ?>">
                    <h1>Mapel</h1>
                </a>
            </div>
        </div>
        <div class="col-md-2 mt-3 box-button-5 align-items-center ">
            <div class="d-flex justify-content-center flex-column tahun-ajaran">
                <i class="fas fa-book-open fa-7x"></i>
                <a class="tulisan-link" href="<?= base_url('mapel'); ?>">
                    <h1>Tahun Ajaran</h1>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>