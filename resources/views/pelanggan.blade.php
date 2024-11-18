@extends('base.base')

@section('content')
    <div class="container">
        @can('insert')
            <a class="btn btn-primary my-3" href="{{ route('pelanggan.create') }}">
                Tambah data
            </a>
        @endcan
        <table class="table table-border table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tahun Masuk</th>
                    <th>Tanggal Lahir</th>
                    <th>History pembelian</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->tahun_masuk }}</td>
                        <td>{{ $row->tgl_lahir }}</td>
                        <td>
                            @foreach($row->pembelian as $r)
                                {{ $r->nomor_pembelian }}<br>
                            @endforeach
                            @if($row->pembelian->count() == 0)
                                -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('pelanggan.edit', $row) }}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('pelanggan.delete', $row) }}" onsubmit="return confirm('hapus data ini?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <table class="table table-border table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pembelian</th>
                    <th>Tanggal Beli</th>
                    <th>Nama Pelanggan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembelian as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nomor_pembelian }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->pelanggan->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('content')
</html>