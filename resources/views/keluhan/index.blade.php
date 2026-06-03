<h2>Data Keluhan</h2>

<a href="{{ route('keluhan.create') }}">Tambah</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Keluhan</th>
        <th>Status</th>
        <th>Alasan Reject</th>
    </tr>

    @foreach ($data as $item)
    <tr>
        <td>{{ $item->masyarakat->nama }}</td>
        <td>{{ $item->keluhan }}</td>
        <td>{{ $item->status }}</td>

        <td>
            {{ $item->status == 'rejected' ? $item->reject_reason : '-' }}
        </td>
    </tr>
    @endforeach

</table>