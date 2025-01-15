@extends('layout/index')
@section('konten')
<a href="/kelas/create" class="btn btn-primary">+ tambah data kelas</a>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>nama kelas</th>
            <th>walikelas</th>
            <th>jumlah siswa</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_kelas }}</td>
            <td>{{ $item->walikelas }}</td>
            <td>{{ $item->jumlah_siswa }}</td>
            <td><a href='{{ url("/kelas/".$item->id)}}' class="btn btn-secondary btn-sm">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links() }}    
@endsection