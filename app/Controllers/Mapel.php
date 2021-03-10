<?php

namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\Modelmapel;
class Mapel extends BaseController
{
    public function index()
    {
        $mapel = new Modelmapel();
        $data = [
            'tittle' => 'Mata Pelajaran',
            'tampildata' => $mapel->tampildata()
        ];
        return view('mapel/mapel', $data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambahmapel()
    {
        $data = [
            'tittle' => 'Tambah Data Mata Pelajaran'
        ];
        return view('mapel/tambahmapel', $data);

    }

    public function addmapel(){
        $mapel = new Modelmapel();
        $data = array(
            'mapel_id' => $this->request->getPost('mapel_id'),
            'mapel_nisn' => $this->request->getPost('mapel_nisn'),
            'mapel_nama' => $this->request->getPost('mapel_nama'),
            'mapel_kkm' => $this->request->getPost('mapel_kkm'),
        );

        $mapel->saveMapel($data);
        return redirect()->to('/mapel');
    }

    public function edit($id)
    {
        $mapel = new Modelmapel();
        $tampildata = $mapel->tampildata($id)->getRow();
        if(isset($tampildata))
        {
            $data['mapel'] = $tampildata;
            $data['tittle'] = 'Edit' .$tampildata->mapel_nama;

            return view('mapel/editmapel', $mapel);
        }else{
            echo '<script>
            alert("NIP '.$id.' Tidak ditemukan");
            window.location="'.base_url('mapel');
            
        }
    }

    public function update()
    {
        $mapel = new Modelmapel();
        $id = $this->request->getPost('mapel_id');
        $data = array(
            'mapel_nama' => $this->request->getPost('mapel_nama'),
            'mapel_kkm' => $this->request->getPost('mapel_kkm')      

        );

        $mapel->editMapel($data, $id);
        return redirect()->to('/mapel');
    }

    public function hapus($id)
    {
        $mapel = new Modelmapel();
        $getMapel = $mapel->tampildata($id)->getRow();
        if(isset($getMapel)){
            $mapel->hapusMapel($id);
            echo '<script>
            alert("Hapus Data kelas Sukses");
            window.location="'.base_url('mapel').'"
            </script>';

        }else{
            echo    '<script>
                    alert("Hapus Gagal !, NIP '.$id.' Tidak ditemukan");
                    window.location="'.base_url('mapel').'"
                    </script>';

        }
        return redirect()->route('/mapel');
    }

}
