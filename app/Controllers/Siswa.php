<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Siswa'
        ];
        return view('siswa/viewsiswa', $data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function tambahsiswa()
    {
        return view('siswa/tambahsiswa');
    }
}
