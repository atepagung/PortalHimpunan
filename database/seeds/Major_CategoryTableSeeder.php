<?php

use Illuminate\Database\Seeder;

class Major_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Major_Category::class)->create([
        	'title' => 'IT'
        ]);
    }
}
