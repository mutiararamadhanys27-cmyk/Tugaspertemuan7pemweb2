<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>

<h2>Tambah Data Masyarakat</h2>

<form action="{{ route('data-masyarakat.store') }}" method="POST">
    @csrf

    <div>
        <label>Nomor KK</label><br>
        <input type="text" name="nomor_kk">
    </div>

    <br>

    <div>
        <label>Nomor KTP</label><br>
        <input type="text" name="nomor_ktp">
    </div>

    <br>

    <div>
        <label>Nama</label><br>
        <input type="text" name="nama">
    </div>

    <br>

    <div>
        <label>Alamat</label><br>
        <textarea name="alamat"></textarea>
    </div>

    <br>

    <div>
        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="">Pilih Gender</option>
            @foreach ($genders as $g)
                <option value="{{ $g }}">{{ $g }}</option>
            @endforeach
        </select>
    </div>

    <br><br>

    <button type="submit">Simpan</button>
</form>

<br>

<a href="{{ route('data-masyarakat.index') }}">← Kembali</a>

</body>
</html>