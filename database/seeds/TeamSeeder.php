<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            "title"=>"Christinne Williams",
            "job"=>"Project Manager",
            "link"=>"img/team/1.jpg",
        ]);

        DB::table('teams')->insert([
            "title"=>"Christinne Williams",
            "job"=>"Junior Developer",
            "link"=>"img/team/2.jpg",
        ]);

        DB::table('teams')->insert([
            "title"=>"Christinne Williams",
            "job"=>"Digital Designer",
            "link"=>"img/team/3.jpg",
        ]);
    }
}
