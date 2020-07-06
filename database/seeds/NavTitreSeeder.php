<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_titres') -> insert([
            'title' => 'Home',
            'link' => '/'
        ]);
        DB::table('nav_titres') -> insert([
            'title' => 'Services',
            'link' => '/services'
        ]);
        DB::table('nav_titres') -> insert([
            'title' => 'Blog',
            'link' => '/blog'
        ]);
        DB::table('nav_titres') -> insert([
            'title' => 'Contact',
            'link' => '/contact'
        ]);
        DB::table('nav_titres') -> insert([
            'title' => 'Elements',
            'link' => '/elements'
        ]);
        DB::table('nav_titres') -> insert([
            'title' => 'Backoffice',
            'link' => '/home'
        ]);
    }
}
