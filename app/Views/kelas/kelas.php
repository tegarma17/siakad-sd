<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 p-3">
            <a href="<?= base_url('kelas/tambahkelas'); ?>" class="button p-2">Tambah</a>
        </div>
        <div class="col-md-1 p-3">
            <a href="<?= base_url('dashboard') ?>" class="button p-2" style="background-color: #F9B401;">Kembali</a>
        </div>
    </div>
</div>
<div class="tabel">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Kelas</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Tahun Ajaran</th>
                            <th scope="col">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tampildata as $row => $data) { ?>
                            <tr>
                                <td><?php echo $data['kelas_id']; ?></td>
                                <td><?php echo $data['kelas_nama']; ?></td>
                                <td><?php echo $data['kelas_tahun_ajaran']; ?></td>
                                <td><?php echo $data['kelas_semester']; ?></td>
                            </tr>
                        <?php } ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>