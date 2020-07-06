<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
            "desc"=>"Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            "title"=>"Main Office",
            "road"=>"C/ Libertad, 34",
            "city"=>"05200 Arévalo",
            "phone"=>"0034 37483 2445 322",
            "mail"=>"hello@company.com",
        ]);
    }
}
