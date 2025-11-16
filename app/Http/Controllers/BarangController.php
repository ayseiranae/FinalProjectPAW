<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $r)
    {
        Barang::create([
            'id_kategori' => $r->id_kategori,
            'barang' => $r->barang,
            'deskripsi' => $r->deskripsi,
            'satuan' => $r->satuan,
            'id_pemasok' => $r->id_pemasok,
        ]);

        return redirect()->route('barang.index');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $r, $id)
    {
        Barang::where('id_barang', $id)->update([
            'id_kategori' => $r->id_kategori,
            'barang' => $r->barang,
            'deskripsi' => $r->deskripsi,
            'satuan' => $r->satuan,
            'id_pemasok' => $r->id_pemasok,
        ]);

        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        Barang::where('id_barang', $id)->delete();
        return redirect()->route('barang.index');
    }
}
