<?php

namespace App\Controllers;

class Guru extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Guru'
        ];
        return view('guru/guru', $data);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
