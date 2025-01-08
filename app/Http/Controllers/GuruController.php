<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    function index()
    {
        // return '<h1>saya guru dari controller</h1>';
        // $data=kelas::all();
        // return $data;
        $data=kelas::orderBy('id','desc')->paginate(1);
        return view('kelas/index')->with('data', $data);
    }
    function detail($id) {
        // return "<h1>saya guru dari controller id $id dengan nama $nama</h1>";
        $data=kelas::where('id',$id)->first();
        return view('kelas/detail')->with('data' ,$data);
    }
}
