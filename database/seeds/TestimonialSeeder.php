<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "link" => "avatar/01.jpg",
            "name" => "Michael Smith",
            "job" => "CEO Company",
        ]);

        DB::table('testimonials')->insert([
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "link" => "avatar/02.jpg",
            "name" => "Michaela Smith",
            "job" => "Programmer",
        ]);

        DB::table('testimonials')->insert([
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "link" => "avatar/01.jpg",
            "name" => "Michael Smith",
            "job" => "CEO Company",
        ]);

        DB::table('testimonials')->insert([
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "link" => "avatar/02.jpg",
            "name" => "Michaela Smith",
            "job" => "Programmer",
        ]);

        DB::table('testimonials')->insert([
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "link" => "avatar/01.jpg",
            "name" => "Michael Smith",
            "job" => "CEO Company",
        ]);

        DB::table('testimonials')->insert([
            "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "link" => "avatar/02.jpg",
            "name" => "Michaela Smith",
            "job" => "Programmer",
        ]);
    }
}