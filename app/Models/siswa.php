<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table='siswa';//nama tabel yang sesuai dengan model
    protected $fillable=['nis','nama','alamat'];
}
