<h1>Data Barang</h1>

<a href="{{ route('barang.create') }}">Tambah Barang</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Kategori</th>
        <th>Nama Barang</th>
        <th>Deskripsi</th>
        <th>Satuan</th>
        <th>Pemasok</th>
        <th>Opsi</th>
    </tr>

    @foreach($data as $b)
    <tr>
        <td>{{ $b->id_barang }}</td>
        <td>{{ $b->kategori->kategori ?? '-' }}</td>
        <td>{{ $b->barang }}</td>
        <td>{{ $b->deskripsi }}</td>
        <td>{{ $b->satuan }}</td>
        <td>{{ $b->pemasok->pemasok ?? '-' }}</td>
        <td>
            <a href="{{ route('barang.edit', $b->id_barang) }}">Edit</a>
            <form action="{{ route('barang.destroy', $b->id_barang) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
