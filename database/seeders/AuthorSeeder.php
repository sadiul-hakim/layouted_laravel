<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("authors") -> insert([
            "name"=>"A N M Bazlur Rahman"
        ]);

        DB::table("authors") -> insert([
            "name"=>"Kamruzzaman Niton"
        ]);
    }
}
