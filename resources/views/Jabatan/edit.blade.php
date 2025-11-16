<h1>Edit Jabatan</h1>

<form method="POST" action="{{ route('jabatan.update', $jabatan->id_jabatan) }}">
    @csrf
    @method('PUT')

    Nama Jabatan:
    <input type="text" name="jabatan" value="{{ $jabatan->jabatan }}" required><br>

    <button type="submit">Update</button>
</form>
