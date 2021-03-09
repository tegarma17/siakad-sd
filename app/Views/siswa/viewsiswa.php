<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1 p-3">
            <a href="<?= base_url('siswa/tambahsiswa'); ?>" class="button p-2">Tambah</a>
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
                            <th scope="col">NISN</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Tahun Angkatan</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th> Function </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($tampildata as $row => $data) { ?>
                            <tr>
                                <td><?= $data['nisn']; ?></td>
                                <td><?= $data['siswa_id_kelas']; ?></td>
                                <td><?= $data['siswa_nama']; ?></td>
                                <td><?= $data['siswa_tahun_angkatan']; ?></td>
                                <td><?= $data['siswa_tempat_lahir']; ?></td>
                                <td><?= $data['siswa_tanggal_lahir']; ?></td>
                                <td><?= $data['siswa_jenis_kelamin']; ?></td>
                                <td><?= $data['siswa_agama']; ?></td>
                                <td><?= $data['siswa_alamat']; ?></td>
                            <td>
                            <a href="<?= base_url('siswa/edit/'.$data['nisn']);?>" 
                            class="btn btn-success">
                            Edit</a>
                            <a href="<?= base_url('siswa/hapus/'.$data['nisn']);?>" 
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