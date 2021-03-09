<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 p-3">
            <a href="#" class="button p-2">Tambah</a>
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
                            <th scope="col">NIP</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Status</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($tampildata as $row => $data) { ?>
                            <tr>
                                <td><?= $data['nip']; ?></td>
                                <td><?= $data['guru_id_kelas']; ?></td>
                                <td><?= $data['guru_nama']; ?></td>
                                <td><?= $data['guru_tempat_lahir']; ?></td>
                                <td><?= $data['guru_tanggal_lahir']; ?></td>
                                <td><?= $data['guru_jenis_kelamin']; ?></td>
                                <td><?= $data['guru_status']; ?></td>
                                <td><?= $data['guru_agama']; ?></td>
                                <td><?= $data['guru_alamat']; ?></td>
                            
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