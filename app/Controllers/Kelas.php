<?php

namespace App\Controllers;

//namespace App\Models;

use CodeIgniter\Controller;
use App\Models\Modelkelas;

class Kelas extends Controller
{
    public function index()
    {

        $kls = new Modelkelas();
        $data = [
            'tampildata' => $kls->tampildata(),
            'tittle' => 'Kelas'
        ];
        return view('kelas/kelas', $data);
    }

    public function tambahkelas()
    {
        $data = [
            'tittle' => 'Tambah Data Kelas',

        ];
        return view('kelas/tambah_kelas', $data);
    }
    public function addkelas()
    {
        $model = new Modelkelas;
        $data = [
            'kelas_id' => $this->request->getPost('kelas_id'),
            'nama_kelas' => $this->request->getpost('kelas_nama')

        ];
        $model->saveKelas($data);
        echo '<script
                alert("Suskes Tambah Kelas");
                window.location="' . base_url('kelas') . '"
            </script>';
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
