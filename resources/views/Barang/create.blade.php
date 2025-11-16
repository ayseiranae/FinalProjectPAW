<h1>Tambah Barang</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <label>Kategori:</label><br>
    <select name="id_kategori" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach($kategori as $k)
            <option value="{{ $k->id_kategori }}">{{ $k->kategori }}</option>
        @endforeach
    </select>
    <br><br>

    <label>Nama Barang:</label><br>
    <input type="text" name="barang" required>
    <br><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi" required></textarea>
    <br><br>

    <label>Satuan:</label><br>
    <select name="satuan" required>
        <option value="pcs">PCS</option>
        <option value="kg">KG</option>
        <option value="g">Gram</option>
        <option value="dus">Dus</option>
    </select>
    <br><br>

    <label>Pemasok (opsional):</label><br>
    <select name="id_pemasok">
        <option value="">-- Pilih Pemasok --</option>
        @foreach($pemasok as $p)
            <option value="{{ $p->id_pemasok }}">{{ $p->pemasok }}</option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">Simpan</button>
</form>
