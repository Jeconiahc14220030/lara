@extends('base.base')

@section('content')
    <div class="container">
        <form action="{{ route('pelanggan.insert') }}" method="POST">
            @csrf
            <h3>Input data Pelanggan</h3>
            <label for="nama">Nama</label>
            <input class="form-control" name="nama">

            <label for="nama">Tahun masuk</label>
            <input class="form-control" type="number" min="1" name="tahun_masuk">

            <label for="nama">Tanggal Lahir</label>
            <input class="form-control" type="date" name="tgl_lahir">

            <label for="nama">alamat</label>
            <textarea class="form-control" name="alamat" rows="3"></textarea>

            <label for="nama">Referensi Pelanggan</label>
            <select name="referal">
                @foreach($pelanggan as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection('content')
</html>