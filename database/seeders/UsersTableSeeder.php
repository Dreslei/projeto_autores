<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{

    public function run(): void
    {


            // User::create([
            //     'name' => $faker->name,
            //     'email' => $faker->unique()->safeEmail,
            //     'password' => bcrypt('password'),
            // ]);

       User::factory(10)->create();
    }
}

