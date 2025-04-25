<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawan = [
            ['nip'=>'246810','nama_karyawan'=>'Bagas','gaji_karyawan'=>'15000000','alamat'=>'leles','jenis_kelamin'=>'Pria'],
            
        ];
        DB::table('karyawan')->insert($karyawan);
    }
}
