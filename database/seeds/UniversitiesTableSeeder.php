<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\University::class)->create([
        	'code' => '001-007',
        	'name' => 'Universitas Padjadjaran',
        	'location' => 'https://www.google.co.id/maps/place/Universitas+Padjadjaran/@-6.9261321,107.7724994,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e653eb17e239:0xc6192a1f92aa9e41!8m2!3d-6.9261321!4d107.7746881?hl=id',
        	'town' => 'Sumedang'
        ]);

        factory(App\University::class)->create([
        	'code' => '002-001',
        	'name' => 'Institute Teknologi Bandung',
        	'location' => 'https://www.google.co.id/maps/place/Institut+Teknologi+Bandung/@-6.89148,107.6084704,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e65767c9b183:0x2478e3dcdce37961!8m2!3d-6.89148!4d107.6106591?hl=id',
        	'town' => 'Bandung'
        ]);

        factory(App\University::class)->create([
        	'code' => '001-002',
        	'name' => 'Universitas Indonesia',
        	'location' => 'https://www.google.co.id/maps/place/Universitas+Indonesia/@-6.3627638,106.8248595,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ec1a804e8b85:0xd7bf80e1977cea07!8m2!3d-6.3627638!4d106.8270482?hl=id',
        	'town' => 'Depok'
        ]);
    }
}
