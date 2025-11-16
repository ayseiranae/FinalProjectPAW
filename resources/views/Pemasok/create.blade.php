<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pemasok</title>
</head>
<body>

<h2>Tambah Pemasok</h2>

<a href="{{ route('pemasok.index') }}">&#8592; Kembali ke Data Pemasok</a>
<br><br>

<form method="POST" action="{{ route('pemasok.store') }}">
    @csrf

    <label>Pemasok:</label><br>
    <input type="text" name="pemasok" required>
    <br><br>

    <label>Kontak:</label><br>
    <input type="text" name="kontak" required>
    <br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
