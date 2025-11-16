<select name="id_jabatan" required>
    @foreach ($jabatan as $j)
        <option value="{{ $j->id_jabatan }}"
            @if ($pegawai->id_jabatan == $j->id_jabatan) selected @endif>
            {{ $j->jabatan }}
        </option>
    @endforeach
</select>
