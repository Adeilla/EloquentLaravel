@extends('layout/index')
@section('konten')
<a href="/siswa/create" class="btn btn-primary">+ tambah data siswa</a>
<table class="table">
    <thead>
        <tr>
            <th>nis</th>
            <th>nama</th>
            <th>alamat</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->nis }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td><a href='{{ url("/siswa/".$item->nis)}}' class="btn btn-secondary btn-sm">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links() }}
@endsection