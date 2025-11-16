<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        return view('kategori.index', compact('data'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $r)
    {
        Kategori::create([
            'kategori' => $r->kategori
        ]);

        return redirect()->route('kategori.index');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $r, $id)
    {
        Kategori::find($id)->update([
            'kategori' => $r->kategori
        ]);

        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
        Kategori::destroy($id);
        return redirect()->route('kategori.index');
    }
}
