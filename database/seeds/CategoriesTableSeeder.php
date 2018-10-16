<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'     => '1',
                'name'   => 'প্রোগ্রামিং',
                'slug'   => 'programming',
            ],
            [
                'id'     => '2',
                'name'   => ' সি প্রোগ্রামিং ',
                'slug'   => 'c-programming',
            ],
            [
                'id'     => '3',
                'name'   => 'অ্যালগরিদম',
                'slug'   => 'algorithm',
            ],
            [
                'id'     => '4',
                'name'   => 'ওয়েব ডেভলপমেন্ট',
                'slug'   => 'web-development',
            ],
            [
                'id'     => '5',
                'name'   => 'লারাভেল',
                'slug'   => 'laravel',
            ],
            [
                'id'     => '6',
                'name'   => 'পিএইচপি',
                'slug'   => 'php',
            ],
            [
                'id'     => '7',
                'name'   => 'ওয়ার্ডপ্রেস',
                'slug'   => 'wordpress',
            ],
            [
                'id'     => '8',
                'name'   => 'ওয়েব ডিজাইন',
                'slug'   => 'web-design',
            ],
            [
                'id'     => '9',
                'name'   => 'এইচটিএমএল',
                'slug'   => 'html',
            ],
            [
                'id'     => '10',
                'name'   => 'সিএসএস',
                'slug'   => 'css',
            ],
            [
                'id'     => '11',
                'name'   => 'বুটস্ট্রাপ',
                'slug'   => 'bootstrap',
            ],
            [
                'id'     => '12',
                'name'   => 'জাভাস্ক্রিপ্ট',
                'slug'   => 'javascript',
            ],
            [
                'id'     => '13',
                'name'   => 'Vue JS',
                'slug'   => 'Vue-JS',
            ],
            [
                'id'     => '14',
                'name'   => 'Underscore JS',
                'slug'   => 'Underscore-js',
            ],
            [
                'id'     => '15',
                'name'   => 'Angular JS',
                'slug'   => 'angular-JS',
            ],
            [
                'id'     => '16',
                'name'   => 'React JS',
                'slug'   => 'react-js',
            ],
            [
                'id'     => '17',
                'name'   => 'পাইথন',
                'slug'   => 'python',
            ],
            [
                'id'     => '18',
                'name'   => 'জাবা',
                'slug'   => 'java',
            ],
            [
                'id'     => '19',
                'name'   => 'গ্রাফিক্স',
                'slug'   => 'graphics',
            ],
            [
                'id'     => '20',
                'name'   => 'স্ট্যাটিক গ্রাফিক্স',
                'slug'   => 'statistics-graphics',
            ],
            [
                'id'     => '21',
                'name'   => 'ফটোশপ',
                'slug'   => 'photoshop',
            ],
            [
                'id'     => '22',
                'name'   => 'ইলাস্ট্রেটর',
                'slug'   => 'illustrator',
            ],
            [
                'id'     => '23',
                'name'   => 'মোশন গ্রাফিক্স',
                'slug'   => 'motion-graphics',
            ],
            [
                'id'     => '24',
                'name'   => 'এডোবি প্রিমিয়ার প্রো',
                'slug'   => 'adobe-premiere-pro',
            ],
            [
                'id'     => '25',
                'name'   => 'এডোবি আফটার ইফেক্ট',
                'slug'   => 'adobe-after-effects',
            ],
            [
                'id'     => '26',
                'name'   => 'ডাটাবেজ',
                'slug'   => 'database',
            ],
            [
                'id'     => '27',
                'name'   => 'MySql',
                'slug'   => 'MySql',
            ],
            [
                'id'     => '28',
                'name'   => 'Orachol',
                'slug'   => 'Orachol',
            ],
            [
                'id'     => '29',
                'name'   => 'শখ',
                'slug'   => 'hobby',
            ],
            [
                'id'     => '30',
                'name'   => 'একুরিয়ামে মাছ পালন',
                'slug'   => 'aquarium-fish',
            ],
            [
                'id'     => '31',
                'name'   => 'বাগান করা ',
                'slug'   => 'gardening',
            ],
            [
                'id'     => '32',
                'name'   => 'পাখি পালন',
                'slug'   => 'Keeping-the-birds',
            ],
            [
                'id'     => '33',
                'name'   => 'কবুতর পালন',
                'slug'   => 'Keeping-the-kabutara',
            ],
            [
                'id'     => '34',
                'name'   => 'মাছ শিকার',
                'slug'   => 'fish-hunting',
            ],
            [
                'id'     => '35',
                'name'   => 'টাকা সংগ্রহ করা',
                'slug'   => 'Collect-money',
            ],
            [
                'id'     => '36',
                'name'   => 'সিনেমা দেখা',
                'slug'   => 'Watch-movies',
            ],
            [
                'id'     => '37',
                'name'   => 'গল্প লিখার চেষ্টা করা',
                'slug'   => 'Trying-to-write-stories',
            ],
            [
                'id'     => '38',
                'name'   => 'আমার ছেলেবেলা ',
                'slug'   => 'my-childhood',
            ],
            [
                'id'     => '39',
                'name'   => 'বই  ',
                'slug'   => 'book',
            ],
            [
                'id'     => '40',
                'name'   => 'ভ্রমণ ',
                'slug'   => 'Traveling',
            ],
            [
                'id'     => '41',
                'name'   => 'সাইন্স ফিকশন ',
                'slug'   => 'science-fiction',
            ],
            [
                'id'     => '42',
                'name'   => 'jQuery',
                'slug'   => 'jquery',
            ]
        ]);
    }
}
