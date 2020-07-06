<?php

use Illuminate\Database\Seeder;

class IntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intros')->insert([
            "link"=>"img/big-logo.png",
            "title"=>"Get your freebie template now!",
            "slide1"=>"img/01.jpg",
            "slide2"=>"img/02.jpg",
        ]);
    }
}
