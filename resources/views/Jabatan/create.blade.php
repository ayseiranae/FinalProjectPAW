<h1>Tambah Jabatan</h1>

<form method="POST" action="{{ route('jabatan.store') }}">
    @csrf
    Nama Jabatan:
    <input type="text" name="jabatan" required><br>

    <button type="submit">Simpan</button>
</form>
