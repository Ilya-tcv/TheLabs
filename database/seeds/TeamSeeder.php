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
            "link"=>"team/1.jpg",
        ]);

        DB::table('teams')->insert([
            "title"=>"Christinne Williams",
            "job"=>"Junior Developer",
            "link"=>"team/2.jpg",
        ]);

        DB::table('teams')->insert([
            "title"=>"Christinne Williams",
            "job"=>"Digital Designer",
            "link"=>"team/3.jpg",
        ]);
    }
}
