<h1>Tambah Transaksi Stok</h1>
<a href="{{ route('transaksi_stok.index') }}">Kembali ke Daftar Transaksi</a>

@if($errors->any())
    <ul style="color:red">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('transaksi_stok.store') }}" method="POST">
    @csrf
    <p>
        <label>Barang:</label>
        <select name="id_barang" required>
            <option value="">-- Pilih Barang --</option>
            @foreach($barangs as $barang)
                <option value="{{ $barang->id_barang }}">{{ $barang->nama }}</option>
            @endforeach
        </select>
    </p>

    <p>
        <label>Pegawai:</label>
        <select name="id_pegawai" required>
            <option value="">-- Pilih Pegawai --</option>
            @foreach($pegawais as $pegawai)
                <option value="{{ $pegawai->id_pegawai }}">{{ $pegawai->nama }}</option>
            @endforeach
        </select>
    </p>

    <p>
        <label>Transaksi:</label>
        <select name="transaksi" required>
            <option value="">-- Pilih --</option>
            <option value="masuk">Masuk</option>
            <option value="keluar">Keluar</option>
        </select>
    </p>

    <p>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" required>
    </p>

    <p>
        <label>Keterangan:</label>
        <textarea name="keterangan" required></textarea>
    </p>

    <p>
        <label>Pemasok:</label>
        <select name="id_pemasok">
            <option value="">-- Pilih Pemasok (opsional) --</option>
            @foreach($pemasoks as $pemasok)
                <option value="{{ $pemasok->id_pemasok }}">{{ $pemasok->nama }}</option>
            @endforeach
        </select>
    </p>

    <p>
        <button type="submit">Simpan</button>
    </p>
</form>
