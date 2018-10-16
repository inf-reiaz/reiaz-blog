<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert(
            [
                [
                    'id'            =>'1',
                    'image'         =>'1.jpg',
                    'about'         => 'খাই ঘুমাই আর পাখি পালি মাঝে মাঝে পড়ি বড় বড় স্বপ্ন দেখি ,একটা প্রোগ্রাম রান করতে পারলে তার পর ১৫ দিন প্রোগ্রামিং করিনা আর বাকি ১৫ দিন চিন্তা করি ক্যামনে GOOGLE এ চাকরি করুম ।',
                    'created_at'    =>'2018-03-04',
                    'updated_at'    =>'2018-03-04',
                ]
            ]
        );
    }
}
