
<div class="container">
    <h3>Data Barang</h3>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Satuan</th>
                <th>Pemasok</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $b)
            <tr>
                <td>{{ $b->id_barang }}</td>
                <td>{{ $b->id_kategori }}</td>
                <td>{{ $b->barang }}</td>
                <td>{{ $b->deskripsi }}</td>
                <td>{{ $b->satuan }}</td>
                <td>{{ $b->id_pemasok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $b->id_barang) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('barang.destroy', $b->id_barang) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

