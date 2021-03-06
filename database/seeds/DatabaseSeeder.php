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
        $this->call(AboutSeeder::class);
        $this->call(AboutSectionSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ServiceSectionSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(FormSeeder::class);
        $this->call(TitleSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}
