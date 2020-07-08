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
            "about_title" =>"GET IN (THE LAB) AND DISCOVER THE WORLD",
            "testimonial_title" =>"WHAT OUR (CLIENTS) SAY",
            "service_title" =>"GET IN THE (LAB) AND SEE THE SERVICES",
            "team_title" => "GET IN THE LAB AND MEET (THE TEAM)",
            "contact_title" => "CONTACT (US)",
            "features_title" => "GET IN THE LAB AND (DISCOVER) THE WORLD",
        ]);
    }
}
