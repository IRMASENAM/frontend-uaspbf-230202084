<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/obat')->json();
        $obat = $response['obat']; // karena CI4 kirim dalam key "obat"
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        Http::post('http://localhost:8080/obat', $request->all());
        return redirect('/obat')->with('success', 'Data obat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/obat/$id")->json();
        $obat = $response['obat']; // karena CI4 kirim dalam key "obat"
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        Http::put("http://localhost:8080/obat/$id", $request->all());
        return redirect('/obat')->with('success', 'Data obat berhasil diubah');
    }

    public function destroy($id)
    {
        Http::delete("http://localhost:8080/obat/$id");
        return redirect('/obat')->with('success', 'Data obat berhasil dihapus');
    }
}