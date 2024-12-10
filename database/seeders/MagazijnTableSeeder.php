<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagazijnTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('magazijn')->insert([
            ['product_id' => 1, 'verpakkingseenheid' => 0.5, 'aantal_aanwezig' => 200, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'verpakkingseenheid' => 1.0, 'aantal_aanwezig' => 150, 'is_actief' => false, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 3, 'verpakkingseenheid' => 0.25, 'aantal_aanwezig' => 300, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 4, 'verpakkingseenheid' => 1.0, 'aantal_aanwezig' => 100, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 5, 'verpakkingseenheid' => 0.75, 'aantal_aanwezig' => 120, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 6, 'verpakkingseenheid' => 1.0, 'aantal_aanwezig' => 250, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 7, 'verpakkingseenheid' => 0.5, 'aantal_aanwezig' => 300, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 8, 'verpakkingseenheid' => 0.25, 'aantal_aanwezig' => 400, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 9, 'verpakkingseenheid' => 1.0, 'aantal_aanwezig' => 350, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 10, 'verpakkingseenheid' => 0.5, 'aantal_aanwezig' => 200, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 11, 'verpakkingseenheid' => 0.25, 'aantal_aanwezig' => 500, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 12, 'verpakkingseenheid' => 1.0, 'aantal_aanwezig' => 150, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
