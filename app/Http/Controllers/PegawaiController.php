<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index', compact('data'));
    }

    public function create()
    {
        $jabatan = Jabatan::all();
        return view('pegawai.create', compact('jabatan'));
    }

    public function store(Request $r)
    {
        Pegawai::create([
            'id_jabatan' => $r->id_jabatan,
            'pegawai'    => $r->pegawai,
            'username'   => $r->username,
            'password'   => bcrypt($r->password) 
        ]);

        return redirect()->route('pegawai.index');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        $jabatan = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatan'));
    }

    public function update(Request $r, $id)
    {
        $data = [
            'id_jabatan' => $r->id_jabatan,
            'pegawai'    => $r->pegawai,
            'username'   => $r->username,
        ];

        if ($r->password != "") {
            $data['password'] = bcrypt($r->password);
        }

        Pegawai::find($id)->update($data);

        return redirect()->route('pegawai.index');
    }

    public function destroy($id)
    {
        Pegawai::destroy($id);
        return redirect()->route('pegawai.index');
    }
}
