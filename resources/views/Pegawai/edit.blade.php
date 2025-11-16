<h1>Edit Pegawai</h1>

<form method="POST" action="{{ route('pegawai.update', $pegawai->id_pegawai) }}">
    @csrf
    @method('PUT')

    Nama Pegawai:<br>
    <input type="text" name="pegawai" value="{{ $pegawai->pegawai }}" required><br><br>

    Username:<br>
    <input type="text" name="username" value="{{ $pegawai->username }}" required><br><br>

    Password:<br>
    <input type="password" name="password" placeholder="Kosongkan jika tidak diubah"><br><br>

    Jabatan:<br>
    <select name="id_jabatan" required>
        @foreach ($jabatan as $j)
            <option value="{{ $j->id_jabatan }}" {{ $pegawai->id_jabatan == $j->id_jabatan ? 'selected' : '' }}>
                {{ $j->jabatan }}
            </option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">Update</button>
</form>
