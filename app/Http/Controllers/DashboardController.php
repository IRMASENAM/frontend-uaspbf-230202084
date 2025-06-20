<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $pasien = Http::get('http://localhost:8080/pasien')->json()['pasien'];
        $obat = Http::get('http://localhost:8080/obat')->json()['obat'];

        return view('dashboard.index', [
            'jumlahPasien' => count($pasien),
            'jumlahObat' => count($obat),
        ]);
    }
}