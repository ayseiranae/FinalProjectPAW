<h1>Tambah Pegawai</h1>

<form method="POST" action="{{ route('pegawai.store') }}">
    @csrf

    Nama Pegawai:<br>
    <input type="text" name="pegawai" required><br><br>

    Username:<br>
    <input type="text" name="username" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>


    Jabatan: <br>
    <select name="id_jabatan" required>
    <option value="">-- Pilih Jabatan --</option>
    @foreach($jabatan as $j)
        <option value="{{ $j->id_jabatan }}">{{ $j->jabatan }}</option>
    @endforeach
    </select>
<br><br>

    <button type="submit">Simpan</button>
</form>
