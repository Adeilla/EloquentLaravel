<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use function Laravel\Prompts\table;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('class')->insert([
            'id'=>1,
            'nama_kelas'=>'X RPL 1',
            'walikelas'=>'ibu nur',
            'jumlah_siswa'=>30,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('class')->insert([
            'id'=>2,
            'nama_kelas'=>'XI RPL 2',
            'walikelas'=>'ibu winda',
            'jumlah_siswa'=>32,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('class')->insert([
            'id'=>3,
            'nama_kelas'=>'XII RPL 2',
            'walikelas'=>'ibu edna',
            'jumlah_siswa'=>28,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
