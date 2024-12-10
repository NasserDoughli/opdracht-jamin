<?php
namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\Product;
use Illuminate\Http\Request;

class LeverancierProductLeveringController extends Controller
{
public function create(Leverancier $leverancier, Product $product)
{
return view('leveranciers.create-product', compact('leverancier', 'product'));
}

public function store(Request $request, Leverancier $leverancier, Product $product)
{
$request->validate([
'datum_levering' => 'required|date',
'aantal' => 'required|integer|min:1',
'datum_eerst_volgende_levering' => 'nullable|date',
'opmerking' => 'nullable|max:255',
]);

$leverancier->producten()->attach($product->id, [
'datum_levering' => $request->datum_levering,
'aantal' => $request->aantal,
'datum_eerst_volgende_levering' => $request->datum_eerst_volgende_levering,
'opmerking' => $request->opmerking,
]);

return redirect()->route('leverancier.show-product', $leverancier->id)
->with('success', 'Levering succesvol toegevoegd.');
}
}
