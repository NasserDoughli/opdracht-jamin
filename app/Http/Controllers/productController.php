<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.show', compact('products'));
    }

    public function producten()
    {
        return $this->belongsToMany(Product::class, 'product_per_leverancier');
    }

    public function getAantalProductenAttribute()
    {
        return $this->producten()->distinct('product_id')->count();
    }

}
