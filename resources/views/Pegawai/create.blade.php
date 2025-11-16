<h1>Tambah Pegawai</h1>

<form method="POST" action="{{ route('pegawai.store') }}">
    @csrf

    Nama Pegawai:
    <input type="text" name="pegawai" required><br>

    Username:
    <input type="text" name="username" required><br>

    Password:
    <input type="password" name="password" required><br>

    Jabatan:
    <select name="id_jabatan" required>
        <option value="">-- Pilih Jabatan --</option>
        @foreach ($jabatan as $j)
            <option value="{{ $j->id_jabatan }}">{{ $j->jabatan }}</option>
        @endforeach
    </select><br>

    <button type="submit">Simpan</button>
</form>
