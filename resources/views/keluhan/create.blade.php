<h2>Tambah Keluhan</h2>

<form action="{{ route('keluhan.store') }}" method="POST">
    @csrf

    <div>
        <label>Pilih Masyarakat</label>
        <select name="masyarakat_id">
            @foreach ($masyarakat as $m)
                <option value="{{ $m->id }}">{{ $m->nama }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Keluhan</label>
        <textarea name="keluhan"></textarea>
    </div>

    <button type="submit">Kirim</button>
</form>