<!DOCTYPE html>
<html>
<head>
    <title>Data Masyarakat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Masyarakat</h4>

            <a href="{{ route('data-masyarakat.create') }}" class="btn btn-primary">
                Tambah Data
            </a>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No KK</th>
                        <th>No KTP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($data as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nomor_kk }}</td>
                        <td>{{ $item->nomor_ktp }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>

                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Aksi
                                </button>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{ route('data-masyarakat.edit', $item->id) }}">
                                            Edit
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>