<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPerLeverancierTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_per_leverancier')->insert([
            [
                'created_at' => now(),
                'updated_at' => now(),
                'is_actief' => 1,
                'leverancier_id' => 1,
                'product_id' => 1,
                'opmerking' => 'Opmerking 1',
                'datum_levering' => Carbon::now(),
                'aantal' => 10,  // Add a default value for 'aantal'
            ],
            [
                'created_at' => now(),
                'updated_at' => now(),
                'is_actief' => 1,
                'leverancier_id' => 2,
                'product_id' => 2,
                'opmerking' => 'Opmerking 2',
                'datum_levering' => Carbon::now(),
                'aantal' => 5,  // Add a default value for 'aantal'
            ],
            // Add more records as needed
        ]);
    }
}

