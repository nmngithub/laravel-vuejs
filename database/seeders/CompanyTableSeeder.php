<?php

namespace Database\Seeders;

use App\Models\Company;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
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
            Company::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'logo' => $faker->languageCode,
                'website' => $faker->address
            ]);
        }
    }
}
