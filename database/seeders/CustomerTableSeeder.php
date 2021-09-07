<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i<50; $i++){
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'company' => $faker->company,
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
