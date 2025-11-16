<!DOCTYPE html>
<html>
<head>
    <title>Edit Pemasok</title>
</head>
<body>

<h2>Edit Data Pemasok</h2>

<a href="{{ route('pemasok.index') }}">&#8592; Kembali ke Data Pemasok</a>
<br><br>

<form method="POST" action="{{ route('pemasok.update', $pemasok->id_pemasok) }}">
    @csrf
    @method('PUT')

    <label>Pemasok:</label><br>
    <input type="text" name="pemasok" value="{{ $pemasok->pemasok }}" required>
    <br><br>

    <label>Kontak:</label><br>
    <input type="text" name="kontak" value="{{ $pemasok->kontak }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
