<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergeenTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('allergeen')->insert([
            ['naam' => 'Gluten', 'omschrijving' => 'Dit product bevat gluten', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Gelatine', 'omschrijving' => 'Dit product bevat gelatine', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'AZO-Kleurstof', 'omschrijving' => 'Dit product bevat AZO-kleurstoffen', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Lactose', 'omschrijving' => 'Dit product bevat lactose', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Soja', 'omschrijving' => 'Dit product bevat soja', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
