@extends('layout/index')
@section('konten')
<form method="POST" action="/kelas">
@csrf
    <div class="mb-3">
        <label for="nama_kelas" class="form-label">nama kelas</label>
        <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="{{ Session::get('nama_kelas')}}>
    </div>
    <div class="mb-3">
        <label for="walikelas" class="form-label">walikelas</label>
        <input type="text" class="form-control" name="walikelas" id="walikelas" value="{{ Session::get('walikelas')}}>
    </div>
    <div class="mb-3">
        <label for="jumlah_siswa" class="form-label">jumlah siswa</label>
        <input type="text" class="form-control" name="jumlah_siswa" id="jumlah_siswa" value="{{ Session::get('jumlah_siswa')}}>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">simpan</button>
    </div>
</form>
@endsection