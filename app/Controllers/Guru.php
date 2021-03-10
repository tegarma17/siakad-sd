<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\Modelguru;

class Guru extends BaseController
{
    public function index()
    {
        $guru = new Modelguru();
        $data = [
            'tittle' => 'Guru',
            'tampildata' => $guru->tampildata()
        ];
        return view('guru/guru', $data);
    }

    

    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambahguru()
    {
        $data = [
            'tittle' => 'Tambah Data Guru'
        ];
        return view('guru/tambahguru', $data);

    }

    public function addguru(){

        $guru = new Modelguru();
        $data = array(
            'nip' => $this->request->getPost('nip'),
            'guru_id_kelas' => $this->request->getpost('guru_id_kelas'),
            'guru_nama' => $this->request->getPost('guru_nama'),
            'guru_tempat_lahir' => $this->request->getPost('guru_tempat_lahir'),
            'guru_tanggal_lahir' => $this->request->getPost('guru_tanggal_lahir'),
            'guru_jenis_kelamin' => $this->request->getPost('guru_jenis_kelamin'),
            'guru_status' => $this->request->getPost('guru_status'),
            'guru_agama' => $this->request->getPost('guru_agama'),
            'guru_alamat' => $this->request->getPost('guru_alamat'),

        );
        $guru->saveGuru($data);
        return redirect()->to('/guru');
    }

    public function edit($id)
    {
        $guru = new Modelguru();
        $tampildata = $guru->tampildata($id)->getRow();
        if(isset($tampildata))
        {
            $data['guru'] = $tampildata;
            $data['tittle'] = 'Edit' .$tampildata->guru_nama;

            return view('guru/editguru', $data);

        }else{
            echo '<script>
            alert("NIP '.$id.' Tidak ditemukan");
            window.location="'.base_url('guru');

        }
    }

    public function hapus($id)
    {
        $guru = new Modelguru();
        $getGuru = $guru->tampildata($id)->getRow();
        if(isset($getGuru)){
            $guru->hapusGuru($id);
            echo '<script>
            alert("Hapus Data kelas Sukses");
            window.location="'.base_url('guru').'"
        </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, NIP '.$id.' Tidak ditemukan");
                    window.location="'.base_url('guru').'"
                </script>';
        }
        return redirect()->route('/guru');
    }

}