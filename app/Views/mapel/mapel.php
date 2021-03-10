<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 p-3">
            <a href="<?= base_url('mapel/tambahmapel'); ?>" class="button p-2">Tambah</a>
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
                            <th scope="col">ID Mata Pelajaran</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Mata Pelajaran</th>
                            <th scope="col">KKM</th>
                            <th scope="col">Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tampildata as $row => $data) { ?>
                            <tr>
                                <td><?= $data['mapel_id']; ?></td>
                                <td><?= $data['mapel_nisn']; ?></td>
                                <td><?= $data['mapel_nama']; ?></td>
                                <td><?= $data['mapel_kkm']; ?></td>
                                <td>
                                      <a href="<?= base_url('mapel/edit/'.$data['mapel_id']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('mapel/hapus/'.$data['mapel_id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus Data Mata Pelajaran ?')"
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