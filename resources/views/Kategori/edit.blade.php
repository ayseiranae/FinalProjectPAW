<h1>Edit Kategori</h1>

<form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Kategori:</label><br>
    <input type="text" name="kategori" value="{{ $kategori->kategori }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('kategori.index') }}">Kembali</a>
