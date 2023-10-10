<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AutoresTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $numeroDeAutores = 60;

        for ($i = 0; $i < $numeroDeAutores; $i++) {
            \DB::table('autores')->insert([
                'nome' => $faker->name,
                'data_nascimento' => $faker->date,
                'nacionalidade' => $faker->country,
            ]);
        }
    }
}
// Comando para rodar as Seeders
//php artisan db:seed --class=AutoresTableSeeder
