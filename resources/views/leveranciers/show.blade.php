<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Leveranciers
    </title>


</head>
<body>
<nav class="bg-yellow-400 py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/overzicht-leverancier" class="text-lg font-bold text-gray-800 hover:text-gray-600">
            Leveranciers
        </a>
        <a href="/" class="inline-block px-4 py-2 text-sm text-white bg-gray-500 rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 mb-4">
            Terug naar Home
        </a>
        <div class="flex space-x-4">
{{--            <a href="{{ route('leveranciers.create') }}" class="px-4 py-2 text-sm text-white bg-green-500 rounded-md shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">--}}
{{--                Voeg Leverancier--}}
{{--            </a>--}}
{{--            <a href="{{ route('product.show') }}" class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--                Bekijk Product--}}
{{--            </a>--}}
        </div>
    </div>
</nav>

<div class="container mt-5 px-4">
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Naam</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Contactpersoon</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Leverancier Nummer</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Mobiel</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Aantal producten</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Producten Tonen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($leveranciers as $leverancier)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-600 border-t">{{ $leverancier->naam }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-t">{{ $leverancier->contact_persoon }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-t">{{ $leverancier->leverancier_nummer }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-t">{{ $leverancier->mobiel }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-t">{{ $leverancier->aantal_producten }}</td>
                    <td class="px-4 py-2 text-sm text-gray-600 border-t">
                        <!-- Button for viewing products -->
                        <a href="{{ route('leverancier.show-product', $leverancier->id) }}"
                           class="inline-block px-3 py-1 text-sm text-white bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Bekijk Producten
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
