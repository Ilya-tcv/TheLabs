<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_sections')->insert([
            "title" => "Get in the lab",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-023-flask"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Projects online",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-011-compass"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Smart Marketing",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-037-idea"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Social Media",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-039-vector"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Brainstorming",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-036-brainstorming"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Documented",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-026-search"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Responsive",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-018-laptop-1"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Retina Ready",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-043-sketch"
        ]);

        DB::table('service_sections')->insert([
            "title" => "Ultra modern",
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "icon" => "flaticon-012-cube"
        ]);
    }
}
