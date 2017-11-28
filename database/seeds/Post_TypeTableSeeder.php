<?php

use Illuminate\Database\Seeder;

class Post_TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post_Type::class)->create(['title' => 'event']);
        factory(App\Post_Type::class)->create(['title' => 'news']);
        factory(App\Post_Type::class)->create(['title' => 'jobs']);
    }
}
