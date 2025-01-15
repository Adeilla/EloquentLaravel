@extends('layout/index')
@section('konten')
<form method="POST" action="/siswa">
    @csrf
    <div class="mb-3">
        <label for="nis" class="form-label">nis</label>
        <input type="text" class="form-control" name="nis" id="nis" value="{{ Session::get('nis')}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">nama siswa</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama')}}">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <textarea class="form-control" name="alamat" id="alamat">{{ Session::get('alamat')}}</textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">simpan</button>
    </div>
</form>
@endsection