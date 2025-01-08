<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    function index(){
        $data=[
            'judul'=>'Halaman utama'
        ];
        return view("halaman/index")->with($data);
    }
    function tentang(){
        $data=[
            'judul'=>'Tentang kami'
        ];
        return view("halaman/tentang")->with($data);
    }
    function kontak(){
        $data=[
            'judul'=>'ini adalah halaman kontak',
            'kontak'=>[
                'email'=>'rpl@smkn9malang.sch.id',
                'ig'=>'smknegeri9malang'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
