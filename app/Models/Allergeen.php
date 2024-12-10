<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    protected $table = 'allergeen';

    protected $fillable = [
        'naam',
        'omschrijving'
    ];
    public function producten()
    {
        return $this->belongsToMany(Product::class, 'product_per_allergeen');
    }
}
