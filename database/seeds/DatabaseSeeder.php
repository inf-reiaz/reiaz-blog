<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeed::class);
        $this->call(CityTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CategorPostTableSeeder::class);
        $this->call(TagPostTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(VideosTableSeeder::class);

    }
}
