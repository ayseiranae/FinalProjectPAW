<h1>Data Pegawai</h1>

<a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>

<table border="1" cellpadding="5">
    <tr>
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Username</th>
        <th>ID Jabatan</th>
        <th>Opsi</th>
    </tr>

    @foreach ($data as $p)
    <tr>
        <td>{{ $p->id_pegawai }}</td>
        <td>{{ $p->pegawai }}</td>
        <td>{{ $p->username }}</td>
        <td>{{ $p->id_jabatan }}</td>

        <td>
            <a href="{{ route('pegawai.edit', $p->id_pegawai) }}">Edit</a>

            <form action="{{ route('pegawai.destroy', $p->id_pegawai) }}"
                method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
