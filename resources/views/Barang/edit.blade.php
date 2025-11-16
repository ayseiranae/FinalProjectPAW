
<div class="container">
    <h3>Edit Barang</h3>

    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>ID Kategori</label>
            <input type="number" name="id_kategori" value="{{ $barang->id_kategori }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="barang" value="{{ $barang->barang }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $barang->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Satuan</label>
            <select name="satuan" class="form-control" required>
                <option value="pcs" {{ $barang->satuan == 'pcs' ? 'selected' : '' }}>PCS</option>
                <option value="kg" {{ $barang->satuan == 'kg' ? 'selected' : '' }}>KG</option>
                <option value="g" {{ $barang->satuan == 'g' ? 'selected' : '' }}>Gram</option>
                <option value="dus" {{ $barang->satuan == 'dus' ? 'selected' : '' }}>Dus</option>
            </select>
        </div>

        <div class="mb-3">
            <label>ID Pemasok</label>
            <input type="number" name="id_pemasok" value="{{ $barang->id_pemasok }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>

