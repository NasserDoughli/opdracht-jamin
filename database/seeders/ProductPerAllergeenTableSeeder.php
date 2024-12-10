<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerAllergeenTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product_per_allergeen')->insert([
            ['product_id' => 1, 'allergeen_id' => 2, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 1, 'allergeen_id' => 1, 'is_actief' => false, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 1, 'allergeen_id' => 3, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 3, 'allergeen_id' => 4, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 6, 'allergeen_id' => 5, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 9, 'allergeen_id' => 2, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 9, 'allergeen_id' => 5, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 10, 'allergeen_id' => 2, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 12, 'allergeen_id' => 4, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 1, 'allergeen_id' => 2, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 4, 'allergeen_id' => 2, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 5, 'allergeen_id' => 5, 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
