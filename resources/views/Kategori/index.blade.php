<h1>Data Kategori</h1>

<a href="{{ route('kategori.create') }}">Tambah Kategori</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Kategori</th>
        <th>Opsi</th>
    </tr>

    @foreach ($data as $k)
    <tr>
        <td>{{ $k->id_kategori }}</td>
        <td>{{ $k->kategori }}</td>

        <td>
            <a href="{{ route('kategori.edit', $k->id_kategori) }}">Edit</a>

            <form action="{{ route('kategori.destroy', $k->id_kategori) }}"
                  method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
