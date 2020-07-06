<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            "imglink" => "img/video.jpg",
            "videolink" => "https://www.youtube.com/watch?v=JgHfx2v9zOU",
        ]);
    }
}
