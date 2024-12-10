<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product')->insert([
            ['naam' => 'Mintnopjes', 'barcode' => '8719587231278', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Schoolkrijt', 'barcode' => '8719587326713', 'is_actief' => false, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Honingdrop', 'barcode' => '8719587327836', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Zure Beren', 'barcode' => '8719587321441', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Cola Flesjes', 'barcode' => '8719587321237', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Turtles', 'barcode' => '8719587322245', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Witte Muizen', 'barcode' => '8719587328256', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Reuzen Slangen', 'barcode' => '8719587325641', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Zoute Rijen', 'barcode' => '8719587322739', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Winegums', 'barcode' => '8719587327527', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Drop Munten', 'barcode' => '8719587322345', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Kruis Drop', 'barcode' => '8719587322265', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Zoute Ruitjes', 'barcode' => '8719587323256', 'is_actief' => true, 'opmerking' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
