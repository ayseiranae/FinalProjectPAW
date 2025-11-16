<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    public function index()
    {
        $data = Pemasok::all();
        return view('pemasok.index', compact('data'));
    }

    public function create()
    {
        return view('pemasok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pemasok' => 'required',
            'kontak' => 'required'
        ]);

        Pemasok::create($request->all());

        return redirect()->route('pemasok.index');
    }

    public function edit($id)
    {
        $pemasok = Pemasok::findOrFail($id);
        return view('pemasok.edit', compact('pemasok'));
    }

    public function update(Request $request, $id)
    {
        $pemasok = Pemasok::findOrFail($id);

        $pemasok->update([
            'pemasok' => $request->pemasok,
            'kontak' => $request->kontak
        ]);

        return redirect()->route('pemasok.index');
    }

    public function destroy($id)
    {
        $pemasok = Pemasok::findOrFail($id);
        $pemasok->delete();

        return redirect()->route('pemasok.index');
    }
}
