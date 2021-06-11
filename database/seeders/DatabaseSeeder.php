<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,50) as $index) {
            DB::table('data_customers')->insert([
                'nama_customer' => $faker->name($gender),
                'alamat_customer' => $faker->address,
                'email' => $faker->email,
                'nomor_hp' => $faker->phoneNumber
            ]);
        }
    }
}
