<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\Product;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::with('producten')->get();
        return view('leveranciers.show', compact('leveranciers'));
    }

    public function show($id)
    {
        $leverancier = Leverancier::with(['producten.magazijn', 'producten.allergenen'])->find($id);
        return view('leveranciers.show-product', compact('leverancier'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required|max:255',
            'contact_persoon' => 'required|max:255',
            'leverancier_nummer' => 'required|max:255',
            'mobiel' => 'required|max:255',
            'opmerking' => 'nullable|max:255',
        ]);
        Leverancier::create($request->all());
        return redirect()->route('leverancier.show')
            ->with('success', 'Nieuwe leverancier toegevoegd.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'naam' => 'required|max:255',
            'contact_persoon' => 'required|max:255',
            'leverancier_nummer' => 'required|max:255',
            'mobiel' => 'required|max:255',
            'opmerking' => 'nullable|max:255',
        ]);
        $leverancier = Leverancier::find($id);
        $leverancier->update($request->all());
        return redirect()->route('leverancier.show')
            ->with('success', 'Leverancier geupdate.');
    }

    public function destroy($id)
    {
        $leverancier = Leverancier::find($id);
        $leverancier->delete();
        return redirect()->route('leverancier.show')
            ->with('success', 'Leverancier verwijderd');
    }

    public function create()
    {
        return view('leveranciers.create');
    }

    public function edit($id)
    {
        $leverancier = Leverancier::find($id);
        return view('leveranciers.edit', compact('leverancier'));
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
