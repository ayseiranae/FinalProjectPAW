<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiStok;
use App\Models\Barang;
use App\Models\Pegawai;
use App\Models\Pemasok;

class TransaksiStokController extends Controller
{
    public function index()
    {
        $transaksis = TransaksiStok::with(['barang', 'pegawai', 'pemasok'])->get();
        return view('transaksi_stok.index', compact('transaksis'));
    }

    public function create()
    {
        $barangs = Barang::all();
        $pegawais = Pegawai::all();
        $pemasoks = Pemasok::all();
        return view('transaksi_stok.create', compact('barangs','pegawais','pemasoks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'id_pegawai' => 'required|integer',
            'transaksi' => 'required|in:masuk,keluar',
            'jumlah' => 'required|integer',
            'keterangan' => 'required|string',
            'id_pemasok' => 'nullable|integer',
        ]);

        TransaksiStok::create($request->all());
        return redirect()->route('transaksi_stok.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $transaksi = TransaksiStok::findOrFail($id);
        $barangs = Barang::all();
        $pegawais = Pegawai::all();
        $pemasoks = Pemasok::all();
        return view('transaksi_stok.edit', compact('transaksi','barangs','pegawais','pemasoks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'id_pegawai' => 'required|integer',
            'transaksi' => 'required|in:masuk,keluar',
            'jumlah' => 'required|integer',
            'keterangan' => 'required|string',
            'id_pemasok' => 'nullable|integer',
        ]);

        $transaksi = TransaksiStok::findOrFail($id);
        $transaksi->update($request->all());
        return redirect()->route('transaksi_stok.index')->with('success', 'Transaksi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $transaksi = TransaksiStok::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi_stok.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
