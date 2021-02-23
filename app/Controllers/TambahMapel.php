<?php

namespace App\Controllers;

class TambahMapel extends BaseController
{
    public function index()
    {
        return view('mapel/viewtambahmapel');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
