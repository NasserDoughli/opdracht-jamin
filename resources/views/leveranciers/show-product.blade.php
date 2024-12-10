<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">

<!-- Terug-knop -->
<a href="/overzicht-leverancier" class="inline-block px-4 py-2 text-sm text-white bg-gray-500 rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">
    Terug naar Overzicht
</a>

<div class="container mx-auto p-6">
    <!-- Leverancier Informatie -->
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Geleverde producten</h1>
        <p class="text-gray-600">Naam leverancier: {{ $leverancier->naam }}</p>
        <p class="text-gray-600">Contactpersoon: {{ $leverancier->contact_persoon }}</p>
        <p class="text-gray-600">Leveranciernummer: {{ $leverancier->leverancier_nummer }}</p>
        <p class="text-gray-600">Mobiel: {{ $leverancier->mobiel }}</p>
    </div>

    <!-- Producten Tabel -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Geconnecteerde Producten</h2>
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Naam Product</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Aantal in Magazijn</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Verpakkingshoeveelheid (kg)</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Laatste Levering</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Acties</th>
            </tr>
            </thead>
            <tbody class="text-sm">
            @forelse($leverancier->producten as $product)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $product->naam }}</td>
                    <td class="px-4 py-2">{{ $product->magazijn->aantal_aanwezig ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $product->magazijn->verpakkingseenheid ?? 'N/A' }} kg</td>
                    <td class="px-4 py-2">
                        {{ $product->leveranciers->firstWhere('id', $leverancier->id)?->pivot->datum_levering ?? 'N/A' }}
                    </td>
                    <td class="px-4 py-2">
                        @if ($product->is_actief)
                            <a href="{{ route('leverancier.product.levering.create', [$leverancier->id, $product->id]) }}" class="text-blue-500 hover:text-blue-700">+ Nieuwe Levering</a>
                        @else
                            <span class="text-red-500">Niet meer geproduceerd</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-6 text-gray-600 font-semibold">
                        Dit bedrijf heeft nog geen producten.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
