<?php

use Illuminate\Database\Seeder;

class NavLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_logos')->insert([
            "link"=>"img/logo.png",
            "name"=>"Navbar logo",
            "created_at" => now(),
        ]);
    }
}
