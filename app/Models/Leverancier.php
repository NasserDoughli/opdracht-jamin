<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;
    protected $table = 'leverancier';
    protected $fillable = [
        'naam', 'contact_persoon', 'leverancier_nummer',
        'mobiel', 'opmerking', 'is_actief'
    ];


    public function producten()
    {
        return $this->belongsToMany(Product::class, 'product_per_leverancier');
    }

    public function getAantalProductenAttribute()
    {
        return $this->producten()->distinct('product_id')->count();
    }
}

