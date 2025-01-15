<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        // return '<h1>saya siswa dari controller</h1>';
        // $data=siswa::all();
        // return $data;
        $data=siswa::orderBy('nis','desc')->paginate(2);
        return view('siswa/index')->with('data',$data);
    }
    public function create() {
        // return "<h1>saya siswa dari controller id $id dengan nama $nama</h1>";
        // $data=siswa::where('nis',$id)->first();
        // return view('siswa/detail')->with('data' ,$data);
        return view('siswa/create');
    }
    public function show(string $id) {
        //
        $data=siswa::where('nis',$id)->first();
        return view('siswa/detail')->with('data',$data);
    }
    public function store(Request $request) 
    {
        //
        Session()->flash('nis',$request->nis);
        Session()->flash('nama',$request->nama);
        Session()->flash('alamat',$request->alamat);

        $request->validate([
            'nis'=>'required|numeric',
            'nama'=>'required',
            'alamat'=>'required',
        ],[
            'nis.required'=>'kolom nis wajib diisi!',
            'nis.numeric'=>'kolom nis wajib diisi dengan angka!',
            'nama.required'=>'kolom nama wajib diisi!',
            'alamat.required'=>'kolom alamat wajib diisi!',
        ]);
        $data=[
            'nis'=>$request->input('nis'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
        ];
        siswa::create($data);
        return redirect('siswa')->with('success','data berhasil disimpan!');
    }
}