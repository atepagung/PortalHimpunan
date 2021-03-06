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
        $this->call(UsersTableSeeder::class);
        $this->call(UniversitiesTableSeeder::class);
        $this->call(Major_CategoryTableSeeder::class);
        $this->call(MajorsTableSeeder::class);
        $this->call(Post_TypeTableSeeder::class);
    }
}
