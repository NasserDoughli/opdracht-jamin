<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeverancierTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('leverancier')->insert([
            ['naam' => 'Venco', 'contact_persoon' => 'Bert van Linge', 'leverancier_nummer' => 'L1029384719', 'mobiel' => 'Mobiel', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Astra Sweets', 'contact_persoon' => 'Jasper del Monte', 'leverancier_nummer' => 'L1029284315', 'mobiel' => '06-28493827', 'is_actief' => false, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Haribo', 'contact_persoon' => 'Sven Stalman', 'leverancier_nummer' => 'L1029324748', 'mobiel' => '06-39398734', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Basset', 'contact_persoon' => 'Joyce Stelterberg', 'leverancier_nummer' => 'L1029329473', 'mobiel' => '06-39128439', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
