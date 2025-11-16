<h1>Data Jabatan</h1>

<a href="{{ route('jabatan.create') }}">Tambah Jabatan</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID Jabatan</th>
        <th>Nama Jabatan</th>
        <th>Opsi</th>
    </tr>

    @foreach ($data as $j)
    <tr>
        <td>{{ $j->id_jabatan }}</td>
        <td>{{ $j->jabatan }}</td>

        <td>
            <a href="{{ route('jabatan.edit', $j->id_jabatan) }}">Edit</a>

            <form action="{{ route('jabatan.destroy', $j->id_jabatan) }}"
                method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
