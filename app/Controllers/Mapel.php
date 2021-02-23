<?php

namespace App\Controllers;

class Mapel extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Mata Pelajaran'
        ];
        return view('mapel/mapel', $data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
