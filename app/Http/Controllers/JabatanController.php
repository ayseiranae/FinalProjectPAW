<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::all();
        return view('jabatan.index', compact('data'));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $r)
    {
        Jabatan::create([
            'jabatan' => $r->jabatan
        ]);

        return redirect()->route('jabatan.index');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $r, $id)
    {
        Jabatan::find($id)->update([
            'jabatan' => $r->jabatan
        ]);

        return redirect()->route('jabatan.index');
    }

    public function destroy($id)
    {
        Jabatan::destroy($id);
        return redirect()->route('jabatan.index');
    }
}
