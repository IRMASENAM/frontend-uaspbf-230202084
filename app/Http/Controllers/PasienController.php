<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;

class PasienController extends Controller
{

    public function exportPdf()
{
    $response = Http::get('http://localhost:8080/pasien')->json();
    $pasien = $response['pasien'];

    $pdf = Pdf::loadView('pasien.export-pdf', compact('pasien'));
    return $pdf->download('data_pasien.pdf');
}

    public function index()
    {
        $response = Http::get('http://localhost:8080/pasien')->json();
        $pasien = $response['pasien']; // karena CI4 kirim dalam key "pasien"
        return view('pasien.index', compact('pasien'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        Http::post('http://localhost:8080/pasien', $request->all());
        return redirect('/pasien')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/pasien/$id")->json();
        $pasien = $response['pasien']; // karena CI4 kirim dalam key "pasien"
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        Http::put("http://localhost:8080/pasien/$id", $request->all());
        return redirect('/pasien')->with('success', 'Data pasien berhasil diubah');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8080/pasien/$id");
        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus');
    }
}