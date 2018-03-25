<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'email' => 'luis@gmail.com',
            'name' => 'Luis',
            'password' => \Illuminate\Support\Facades\Hash::make('123'),
        ]);

        $faker = Faker::create();
        for ($i = 0; $i < 3; $i++) {
            user::create([
                'name' => $faker->firstName,
                'email' => $faker->email(),
                'password' => \Illuminate\Support\Facades\Hash::make($faker->password()),
            ]);
        }
    }
}
