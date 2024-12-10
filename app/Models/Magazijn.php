<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    protected $table = 'magazijn';

    protected $fillable = [
        'product_id',
        'verpakkingseenheid',
        'aantal_aanwezig'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
