<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;
use Faker\Factory as Faker;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i < 3; $i++) {
            manufacturer::create([
                'name'=>$faker->name(),
                'website'=>$faker->domainName(),
            ]);
        }
    }
}
