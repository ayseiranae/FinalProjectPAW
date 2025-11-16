<h1>Edit Barang</h1>

<form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Kategori:</label><br>
    <select name="id_kategori" required>
        @foreach($kategori as $k)
            <option value="{{ $k->id_kategori }}" {{ $barang->id_kategori == $k->id_kategori ? 'selected' : '' }}>
                {{ $k->kategori }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Nama Barang:</label><br>
    <input type="text" name="barang" value="{{ $barang->barang }}" required>
    <br><br>

    <label>Deskripsi:</label><br>
    <textarea name="deskripsi" required>{{ $barang->deskripsi }}</textarea>
    <br><br>

    <label>Satuan:</label><br>
    <select name="satuan" required>
        <option value="pcs" {{ $barang->satuan == 'pcs' ? 'selected' : '' }}>PCS</option>
        <option value="kg" {{ $barang->satuan == 'kg' ? 'selected' : '' }}>KG</option>
        <option value="g" {{ $barang->satuan == 'g' ? 'selected' : '' }}>Gram</option>
        <option value="dus" {{ $barang->satuan == 'dus' ? 'selected' : '' }}>Dus</option>
    </select>
    <br><br>

    <label>Pemasok (opsional):</label><br>
    <select name="id_pemasok">
        <option value="">-- Pilih Pemasok --</option>
        @foreach($pemasok as $p)
            <option value="{{ $p->id_pemasok }}" {{ $barang->id_pemasok == $p->id_pemasok ? 'selected' : '' }}>
                {{ $p->pemasok }}
            </option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">Update</button>
</form>
