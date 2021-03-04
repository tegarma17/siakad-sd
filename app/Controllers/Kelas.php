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
        $kls = new Modelkelas();
        $data = array(
            'kelas_id' => $this->request->getPost('kelas_id'),
            'kelas_nama' => $this->request->getPost('kelas_nama'),
            'kelas_tahun_ajaran' => $this->request->getPost('kelas_tahun_ajaran'),
            'kelas_semester' => $this->request->getPost('kelas_semester'),
        );
        $kls->saveKelas($data);
        return redirect()->to('/kelas');
    }

    public function edit($id)
    {
        $kls = new Modelkelas();
        $tampildata = $kls->tampildata($id)->getRow();
        if(isset($tampildata))
        {
            $data['kelas'] = $tampildata;
            $data['title']  = 'Edit '.$tampildata->kelas_nama;
             
            return view('kelas/edit_kelas', $data);
        }else{

            echo '<script>
                    alert("ID kelas '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kelas').'"
                </script>';
        }
    }

    public function update()
    {
        $kls = new Modelkelas();
        $id = $this->request->getPost('kelas_id');
        $data = array(
            'kelas_nama' => $this->request->getPost('kelas_nama'),
            'kelas_tahun_ajaran' => $this->request->getPost('kelas_tahun_ajaran'),
            'kelas_semester' => $this->request->getPost('kelas_semester'),
            
        );
        $kls->editKelas($data,$id);
        return redirect()->to('/kelas');
    }

    public function hapus($id)
    {
        $kelas = new Modelkelas;
        $getKelas = $kelas->tampildata($id)->getRow();
        if(isset($getKelas)){
            $kelas->hapusKelas($id);
            echo '<script>
            alert("Hapus Data kelas Sukses");
            window.location="'.base_url('kelas').'"
        </script>';

        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID kelas '.$id.' Tidak ditemukan");
                    window.location="'.base_url('kelas').'"
                </script>';
            }
        return redirect()->route('/kelas');

    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
