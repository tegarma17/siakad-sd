<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Dashboard'
		];
		return view('dashboard', $data);
	}

	public function guru()
	{
		return view('guru/tbGuru');
	}

	public function mapel()
	{
		return view('mapel/mapel');
	}
	public function kelas()
	{
		return view('kelas/kelas');
	}
}
