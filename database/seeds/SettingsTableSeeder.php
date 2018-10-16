<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            
            [
                'id'                    => 1,
                'website_name'          => 'রিয়াজ সাহেবের আড্ডাখানা ',
                'website_author'        => 'Abodu Halim Reiaz',
                'website_logo'          => 'logo.png',
                'website_description'   => 'Abdul Halim Reiaz web Devoloper (reiazbubt@gmail.com)',
                'website_keywords'      => 'laravel, php, html5, css3,java,wordpress',
                'facebook'              => 'https://www.facebook.com/infreiaz',
                'twitter'               => 'https://www.facebook.com/infreiaz',
                'google_plus'           => 'https://www.facebook.com/infreiaz',
                'linkedin'              => 'https://www.facebook.com/infreiaz',
                'github'                => 'https://www.facebook.com/infreiaz',
                'instagram'             => 'https://www.facebook.com/infreiaz',
                'youtube'               => 'https://www.facebook.com/infreiaz',
            ]
            
        ]);
    }
}
