<!DOCTYPE html>
<html>
<head>
    <title>Data Pemasok</title>
</head>
<body>

<h2>Data Pemasok</h2>

<a href="{{ route('pemasok.create') }}">+ Tambah Pemasok</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Pemasok</th>
        <th>Kontak</th>
        <th>Opsi</th>
    </tr>

    @foreach ($data as $p)
    <tr>
        <td>{{ $p->id_pemasok }}</td>
        <td>{{ $p->pemasok }}</td>
        <td>{{ $p->kontak }}</td>
        <td>
            <a href="{{ route('pemasok.edit', $p->id_pemasok) }}">Edit</a>

            <form action="{{ route('pemasok.destroy', $p->id_pemasok) }}" 
                method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
