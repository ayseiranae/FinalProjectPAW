<h1>Daftar Transaksi Stok</h1>
<a href="{{ route('transaksi_stok.create') }}">Tambah Transaksi</a>
<br><br>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Barang</th>
            <th>Pegawai</th>
            <th>Transaksi</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Pemasok</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksis as $t)
        <tr>
            <td>{{ $t->id_transaksi }}</td>
            <td>{{ $t->barang->barang ?? '-' }}</td>
            <td>{{ $t->pegawai->pegawai ?? '-' }}</td>
            <td>{{ ucfirst($t->transaksi) }}</td>
            <td>{{ $t->jumlah }}</td>
            <td>{{ $t->keterangan }}</td>
            <td>{{ $t->pemasok->nama ?? '-' }}</td>
            <td>
                <a href="{{ route('transaksi_stok.edit', $t->id_transaksi) }}">Edit</a>
                <form action="{{ route('transaksi_stok.destroy', $t->id_transaksi) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
