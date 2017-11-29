<?php

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Major::class)->create([
        	'name' => 'Teknik Informatika',
        	'university_id' => 1,
        	'major_category_id' => 1
        ]);

        factory(App\Major::class)->create([
        	'name' => 'Teknik Informatika',
        	'university_id' => 2,
        	'major_category_id' => 1
        ]);

        factory(App\Major::class)->create([
        	'name' => 'Ilmu Komputer',
        	'university_id' => 3,
        	'major_category_id' => 1
        ]);
    }
}
