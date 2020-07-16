<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            "title" =>"GET IN (THE LAB) AND DISCOVER THE WORLD",
        ]);
        DB::table('titles')->insert([
            "title" =>"WHAT OUR (CLIENTS) SAY",
        ]);
        DB::table('titles')->insert([
            "title" =>"GET IN THE (LAB) AND SEE THE SERVICES",
        ]);
        DB::table('titles')->insert([
            "title" =>"GET IN THE LAB AND MEET (THE TEAM)",
        ]);
        DB::table('titles')->insert([
            "title" =>"CONTACT (US)",
        ]);
        DB::table('titles')->insert([
            "title" =>"GET IN THE LAB AND (DISCOVER) THE WORLD",
        ]);
    }
}