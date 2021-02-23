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

    public function dashboard()
    {
        return view('dashboard');
    }
}
