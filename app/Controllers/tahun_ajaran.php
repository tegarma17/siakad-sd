<?php


namespace App\Controllers;

use Codeigniter\Controller;
use App\Models\Modeltahunajaran;

class Tahunajaran extends BaseController
{
    public function index()
    {
        $tahunajaran = new Modeltahunajaran;
        $data = [
            'tittle' => 'Tahun Ajaran',
            'tampildata' => $tahunajaran->tampildata()
        ];
        return view('tahun_ajaran/tahun_ajaran', $data);

    }
    
    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambahtahunajaran()
    {
        $data = [
            'tittle' => ' Tambah Data Tahun Ajaran'

        ];
        return view('tahun_ajaran/tambahtahunajaran', $data);
    }

    public function addtahunajaran()
    {
        $tahunajaran = new Modeltahunajaran;
        $data = array(
            'tahun_ajaran_id' => $this->request->getPost('tahun_ajaran_id'),
            'tahun_ajaran' => $this ->request->getPost('tahun_ajaran'),
            'status' => $this->request->getPost('status'),
        );

        $tahunajaran->saveTahunajaran($data);
        return redirect()->to('/tahun_ajaran');
    }

    public function edit($id)
    {
        $tahunajaran = new Modeltahunajaran();
        $tampildata = $tahunajaran->tampildata($id)->getRow();
        if(isset($tampildata))
        {
            $data['tahun_ajaran'] =$tampildata;
            $data['tittle'] = 'Edit' .$tampildata->tahun_ajaran;

            return view('tahun_ajaran/edittahunajaran', $tahunajaran);
        }else{
             echo '<script>
             alert("NIP '.$id.' Tidak ditemukan");
             window.location="'.base_url('mapel');

        }
    }

    public function update()
    {
        $tahunajaran = new Modeltahunajaran();
        $id = $this->request->getPost('id_tahun_ajaran');

        $data = array
        (
            'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
            'status' => $this->request->getPost('status'),

        );

        $tahunajaran->editTahunajaran($data, $id);
        return redirect()->to('/tahun_ajaran');
    }
    public function hapus($id)
    {
        $tahunajaran = new Modeltahunajaran();
        $getTahunajaran = $tahunajaran->tampildata($id)->getRow();
        if(isset($getTahunajaran))
        {
            $tahunajaran->hapusTahunajaran($id);
            echo '<script>
            alert("Hapus Data kelas Sukses");
            window.location="'.base_url('tahun_ajaran').'"
            </script>';
        }else{
             echo    '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('tahun_ajaran').'"
                    </script>';
        }
        return redirect()->route('/tahun_ajaran');
    }

}




