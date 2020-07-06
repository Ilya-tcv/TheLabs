<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NavTitreSeeder::class);
        $this->call(NavLogoSeeder::class);
        $this->call(IntroSeeder::class);
    }
}
