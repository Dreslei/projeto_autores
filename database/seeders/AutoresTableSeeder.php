<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AutoresTableSeeder extends Seeder
{

    public function run(): void
    {
       Autor::factory(10)->create();
    }
}

