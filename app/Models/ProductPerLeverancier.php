<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Pivot
{
    // De tablenaam hoeft hier niet gespecificeerd te worden, aangezien het standaard de naam van de relatie zal gebruiken,
    // maar als je een andere naam hebt, kun je die hieronder aangeven:
    protected $table = 'product_per_leverancier';

    // Geven we de fillable attributen op voor deze pivot-tabel
    protected $fillable = [
        'leverancier_id',
        'product_id',
        'datumlevering',
        'aantal',
        'datum_eerst_volgende_levering'
    ];

    // Relatie naar leverancier
    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'leverancier_id');
    }

    // Relatie naar product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
