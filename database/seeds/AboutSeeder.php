<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            "icon"=>"flaticon-023-flask",
            "title"=>"Get in the lab",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
        ]);
        DB::table('abouts')->insert([
            "icon"=>"flaticon-011-compass",
            "title"=>"Projects online",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        DB::table('abouts')->insert([
            "icon"=>"flaticon-037-idea",
            "title"=>"SMART MARKETING",
            "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
    }
}
