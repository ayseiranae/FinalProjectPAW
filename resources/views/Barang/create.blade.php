
<div class="container">
    <h3>Tambah Barang</h3>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>ID Kategori</label>
            <input type="number" name="id_kategori" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="barang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Satuan</label>
            <select name="satuan" class="form-control" required>
                <option value="pcs">PCS</option>
                <option value="kg">KG</option>
                <option value="g">Gram</option>
                <option value="dus">Dus</option>
            </select>
        </div>

        <div class="mb-3">
            <label>ID Pemasok</label>
            <input type="number" name="id_pemasok" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>

