<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AllergeenTableSeeder::class,
            ProductTableSeeder::class,
            ProductPerAllergeenTableSeeder::class,
            LeverancierTableSeeder::class,
            ProductPerLeverancierTableSeeder::class,
            MagazijnTableSeeder::class,
        ]);
    }
}
