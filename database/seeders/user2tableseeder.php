<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user2tableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users2 = [
            ['name'=>'Admin','email'=>'admin@gmail.com','password'=>Hash::make('246810')],
        ];
        DB::table('users2')->insert($users2);
    }
}
