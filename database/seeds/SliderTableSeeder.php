<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert(
            [
                [
                    'id'            =>'1',
                    'title'         =>'Comilla Victorians',
                    'image'         =>'1.jpg',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ],
                [
                    'id'            =>'2',
                    'title'         =>'Comilla Victorians2',
                    'image'         =>'1.jpg',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ],
                [
                    'id'            =>'3',
                    'title'         =>'Comilla Victorians3',
                    'image'         =>'1.jpg',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ],
                [
                    'id'            =>'4',
                    'title'         =>'Comilla Victorians4',
                    'image'         =>'1.jpg',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ],
                [
                    'id'            =>'5',
                    'title'         =>'Comilla Victorians5',
                    'image'         =>'1.jpg',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ],
                [
                    'id'            =>'6',
                    'title'         =>'Comilla Victorians6',
                    'image'         =>'1.jpg',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ],
            ]
        );
    }
}
