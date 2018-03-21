<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;
use App\Vehicle;
use Faker\Factory as Faker;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $amount = Manufacturer::all()->count();
        for ($i = 0; $i < $amount; $i++) {
            vehicle::create([
                'color' => $faker->safeColorName(),
                'model' => $faker->word(),
                'manufacturer_id' => $faker->numberBetween(1, $amount),
            ]);
        }
    }
}
