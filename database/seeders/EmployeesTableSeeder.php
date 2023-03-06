<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('employees')->insert([
                'name' => $faker->name(),
                'position' => $faker->jobTitle(),
                'salary' => $faker->numberBetween(2000,  10000),
            ]);
        }
    }
}
