<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class layananseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $users = [
            ['nama_layanan'=>'Jalur Darat'],
            ['nama_layanan'=>'Jalur Laut'],
        ];
        DB::table('layanans')->insert($users);
    }
}
