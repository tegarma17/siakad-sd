<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\Modelsiswa;


class Siswa extends BaseController
{
    public function index()
    {
        $siswa = new Modelsiswa();
        $data = [
            'tittle' => 'Siswa',
            'tampildata' =>$siswa->tampildata()
        ];
        return view('siswa/viewsiswa', $data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambahsiswa()
    {
        $data = [
            'tittle' => 'Tambah Data Siswa'
        ];
        return view('siswa/tambahsiswa',$data);
    }

    public function addSiswa(){

        $siswa = new Modelsiswa();
        $data = array(
            'nisn' => $this->request->getPost('nisn'),
            'siswa_id_kelas' => $this->request->getPost('siswa_id_kelas'),
            'siswa_nama' => $this->request->getPost('siswa_nama'),
            'siswa_tahun_angkatan' => $this->request->getPost('siswa_tahun_angkatan'),
            'siswa_tempat_lahir' => $this->request->getPost('siswa_tempat_lahir'),
            'siswa_tanggal_lahir' => $this->request->getPost('siswa_tanggal_lahir'),
            'siswa_jenis_kelamin' => $this->request->getPost('siswa_jenis_kelamin'),
            'siswa_agama' => $this->request->getPost('siswa_agama'),
            'siswa_alamat' => $this->request->getPost('siswa_alamat'),
        );
        $siswa->saveSiswa($data);
        return redirect()->to('/siswa');  

    }

    public function edit($id)
    {
        $siswa = new Modelsiswa();
        $tampildata = $siswa->tampildata($id)->getRow();
        if(isset($tampildata))
        {
            $data['siswa'] = $tampildata;
            $data['tittle'] = 'Edit' .$tampildata->siswa_nama;

            return view('siswa/editsiswa', $data);
        }else{
            echo '<script>
                    alert("ID kelas '.$id.' Tidak ditemukan");
                    window.location="'.base_url('siswa').'"
                </script>';
        }
    }

    public function update()
    {
        $siswa = new Modelsiswa();
        $id = $this->request->getPost('nisn');
        $data = array(
            'siswa_id_kelas' => $this->request->getPost('siswa_id_kelas'),
            'siswa_nama' => $this->request->getPost('siswa_nama'),
            'siswa_tahun_angkatan' => $this->request->getPost('siswa_tahun_angkatan'),
            'siswa_tempat_lahir' => $this->request->getPost('siswa_tempat_lahir'),
            'siswa_tanggal_lahir' => $this->request->getPost('siswa_tanggal_lahir'),
            'siswa_jenis_kelamin' => $this->request->getPost('siswa_jenis_kelamin'),
            'siswa_agama' => $this->request->getPost('siswa_agama'),
            'siswa_alamat' => $this->request->getPost('siswa_alamat'),
        
        );
        $siswa->editSiswa($data, $id);
        return redirect()->to('/siswa');
    }

    public function hapus($id)
    {
        $siswa = new Modelsiswa();
        $getSiswa = $siswa->tampildata($id)->getRow();
        if(isset($getSiswa)){
            $siswa->hapusSiswa($id);
            echo '<script>
            alert("Hapus Data kelas Sukses");
            window.location="'.base_url('siswa').'"
        </script>';

        }else{
            echo '<script>
                    alert("Hapus Gagal !, NISN '.$id.' Tidak ditemukan");
                    window.location="'.base_url('siswa').'"
                </script>';
            }

            return redirect()->route('/siswa');
        }
 }
    
