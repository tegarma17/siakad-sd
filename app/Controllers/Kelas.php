<?php

namespace App\Controllers;

//namespace App\Models;

use CodeIgniter\Controller;
use App\Models\Modelkelas;

//  @var HTTP\IncomingRequest

class Kelas extends Controller
{

    protected $request;
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
        $model = new Modelkelas();
        $data = array(
            'kelas_id' => $this->request->getVar('kelas_id'),
            'kelas_nama' => $this->request->getVar('kelas_nama'),
            'kelas_tahun_ajaran' => $this->request->getVar('kelas_tahun_ajaran'),
            'kelas_semester' => $this->request->getVar('kelas_semester'),
        );
        $model->saveKelas($data);
        return redirect()->to('/kelas');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
