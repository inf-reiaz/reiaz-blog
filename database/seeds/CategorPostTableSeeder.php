<?php

use Illuminate\Database\Seeder;

class CategorPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->insert([
            [
                'category_id'     => '1',
                'post_id'         => '1',
                
            ],
            [
                'category_id'     => '1',
                'post_id'           => '2',
                
            ],
            [
                'category_id'     => '1',
                'post_id'           => '3',
                
            ],
            [
                'category_id'     => '1',
                'post_id'           => '4',
                
            ],
            [
                'category_id'     => '1',
                'post_id'           => '5',
                
            ],
            [
                'category_id'     => '2',
                'post_id'           => '5',
                
            ],
            [
                'category_id'     => '2',
                'post_id'           => '1',
                
            ],
            [
                'category_id'     => '2',
                'post_id'           => '2',
                
            ],
            [
                'category_id'     => '3',
                'post_id'           => '2',
                
            ],
            [
                'category_id'     => '4',
                'post_id'           => '3',
                
            ],
            [
                'category_id'     => '6',
                'post_id'           => '2',
                
            ],
            [
                'category_id'     => '6',
                'post_id'           => '1',
                
            ],
            [
                'category_id'     => '5',
                'post_id'           => '1',
                
            ],
            [
                'category_id'     => '5',
                'post_id'           => '5',
                
            ],
            [
                'category_id'     => '5',
                'post_id'           => '3',
                
            ],
            [
                'category_id'     => '3',
                'post_id'           => '5',
                
            ],
            [
                'category_id'     => '1',
                'post_id'           => '6',
                
            ],
            [
                'category_id'     => '2',
                'post_id'           => '6',
                
            ],
        ]);
    }
}
