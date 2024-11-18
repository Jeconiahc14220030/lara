@extends('base.base')

@section('content')
    <div class="container">
        <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
            @csrf
            @method('put')
            <h3>Edit data Pelanggan</h3>
            <label for="nama">Nama</label>
            <input class="form-control" name="nama" value="{{$pelanggan->nama}}">

            <label for="nama">Tahun masuk</label>
            <input class="form-control" type="number" min="1" name="tahun_masuk" value="{{$pelanggan->tahun_masuk}}">

            <label for="nama">Tanggal Lahir</label>
            <input class="form-control" type="date" name="tgl_lahir" value="{{$pelanggan->tgl_lahir}}">

            <label for="nama">alamat</label>
            <textarea class="form-control" name="alamat" rows="3">{{ $pelanggan->alamat }}</textarea>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection('content')
</html>