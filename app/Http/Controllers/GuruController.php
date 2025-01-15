<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index()
    {
        // return '<h1>saya guru dari controller</h1>';
        // $data=kelas::all();
        // return $data;
        $data=kelas::orderBy('id','desc')->paginate(2);
        return view('kelas/index')->with('data', $data);
    }
    public function create() {
        // return "<h1>saya guru dari controller id $id dengan nama $nama</h1>";
        return view('kelas/create');
    }
    public function show(string $id) {
        //
        $data=kelas::where('id',$id)->first();
        return view('kelas/detail')->with('data',$data);
    }
    public function store(Request $request)
    {
        //
        Session()->flash('nama_kelas',$request->namakelas);
        Session()->flash('walikelas',$request->walikelas);
        Session()->flash('jumlah_siswa',$request->jumlahsiswa);

        $request->validate([
            'nama_kelas'=>'required',
            'walikelas'=>'required',
            'jumlah_siswa'=>'required|numeric',
        ],[
            'nama_kelas.required'=>'kolom nama kelas wajib diisi!',
            'walikelas.required'=>'kolom wali kelas wajib diisi!',
            'jumlah_siswa.required'=>'kolom jumlah siswa wajib diisi!',
            'jumlah_siswa.numeric'=>'kolom jumlah siswa wajib diisi dengan angka!',
        ]);
        $data=[
            'nama_kelas'=>$request->input('nama_kelas'),
            'walikelas'=>$request->input('walikelas'),
            'jumlah_siswa'=>$request->input('jumlah_siswa'),
        ];
        kelas::create($data);
        return redirect('kelas')->with('success','data berhasil disimpan!');
    }
}
