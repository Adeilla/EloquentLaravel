@extends('layout/aplikasi')
@section('konten')        
        <h1>{{$judul}}</h1>
        <p>Ini halaman blade template laravel</p>
        <p>
            <ul>
                <li>Email : {{$kontak['email']}}</li>
                <li>Instagram : {{$kontak['ig']}}</li>
            </ul>
        </p>
@endsection        