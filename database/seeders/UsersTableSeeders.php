<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Nael Khalil',
            'password'=>Hash::make('password'),
            'email'=>'palart@gmail.com',
            'created_at'=>now(),
            'created_at'=>now(),

        ]);
        DB::table('users')->insert([
            'name'=>'Nael Khalil1',
            'password'=>Hash::make('password'),
            'email'=>'palart1@gmail.com',
            'created_at'=>now(),
            'created_at'=>now(),

        ]);
    }
}
