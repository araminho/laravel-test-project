<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 500;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'description' => $faker->sentence,
                'username' => $faker->unique()->userName,
                'password' => $faker->password,
                'is_active' => $faker->boolean,
            ]);
        }
    }
}
