<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'info' => 'information',
            'link' => 'https://www.youtube.com/watch?v=30puTn5AayA&start_radio=1&list=RD30puTn5AayA&t=2'
            ]);
    }
}
