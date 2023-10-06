<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'name'=>'Laravel',
            'slug'=>'laravel',
            'created_at'=>now(),
            'created_at'=>now(),

        ]);
        DB::table('tags')->insert([
            'name'=>'PHP',
            'slug'=>'php',
            'created_at'=>now(),
            'created_at'=>now(),

        ]);
    }
}
