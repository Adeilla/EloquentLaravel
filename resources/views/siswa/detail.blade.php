@extends('layout/index')
@section('konten')
<table class="table">
    <div>
        <a href="/siswa" class="btn btn-secondary"><< kembali</a>
        <h1>{{$data->nama}}</h1>
        <p>
            <b>nomor induk siswa: </b>{{$data->nis}}
        </p>
        <p>
            <b>alamat: </b>{{$data->alamat}}
        </p>
    </div>
@endsection