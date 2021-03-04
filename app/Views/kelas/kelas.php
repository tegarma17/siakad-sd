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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tampildata as $row => $data) { ?>
                            <tr>
                                <td><?= $data['kelas_id']; ?></td>
                                <td><?= $data['kelas_nama']; ?></td>
                                <td><?= $data['kelas_tahun_ajaran']; ?></td>
                                <td><?= $data['kelas_semester']; ?></td>
                            <td>
                            <a href="<?= base_url('kelas/edit/'.$data['kelas_id']);?>" 
                            class="btn btn-success">
                            Edit</a>
                            <a href="<?= base_url('kelas/hapus/'.$data['kelas_id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a></td>
                            </tr>
                        <?php } 
                        ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>