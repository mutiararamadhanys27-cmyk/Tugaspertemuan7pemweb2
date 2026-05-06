<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-header d-flex justify-content-between">
            <h4>Form Data Masyarakat</h4>

            <a href="{{ route('data-masyarakat.index') }}">
                Kembali
            </a>
        </div>

        <div class="card-body">

            <form action="{{ route('data-masyarakat.update', $masyarakat->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>No KK</label>

                    <input type="text"
                           name="nomor_kk"
                           class="form-control"
                           value="{{ $masyarakat->nomor_kk }}"
                           readonly>
                </div>

                <div class="mb-3">
                    <label>No KTP</label>

                    <input type="text"
                           name="nomor_ktp"
                           class="form-control"
                           value="{{ $masyarakat->nomor_ktp }}"
                           readonly>
                </div>

                <div class="mb-3">
                    <label>Nama</label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ $masyarakat->nama }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>

                    <textarea name="alamat"
                              class="form-control"
                              rows="5">{{ $masyarakat->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Jenis Kelamin</label>

                    <select name="jenis_kelamin" class="form-control">

                        @foreach ($genders as $g)

                            <option value="{{ $g }}"
                                {{ $masyarakat->jenis_kelamin == $g ? 'selected' : '' }}>

                                {{ $g }}

                            </option>

                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Data
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>