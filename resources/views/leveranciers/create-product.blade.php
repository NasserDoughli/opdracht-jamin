<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Levering Toevoegen</h2>


    <a href="/" class="inline-block px-4 py-2 text-sm text-white bg-gray-500 rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 mb-4">
        Terug naar Home
    </a>

    <form action="{{ route('levering.store', ['leverancier' => $leverancier->id, 'product' => $product->id]) }}" method="POST">
        @csrf


        <div class="mb-4">
            <label for="datum_levering" class="block text-sm font-medium">Datum Levering</label>
            <input type="date" name="datum_levering" class="form-input mt-1 block w-full @error('datum_levering') border-red-500 @enderror" >
            @error('datum_levering')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Aantal -->
        <div class="mb-4">
            <label for="aantal" class="block text-sm font-medium">Aantal</label>
            <input type="number" name="aantal" class="form-input mt-1 block w-full @error('aantal') border-red-500 @enderror" min="1" >
            @error('aantal')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Datum Volgende Levering -->
        <div class="mb-4">
            <label for="datum_eerst_volgende_levering" class="block text-sm font-medium">Datum Volgende Levering</label>
            <input type="date" name="datum_eerst_volgende_levering" class="form-input mt-1 block w-full @error('datum_eerst_volgende_levering') border-red-500 @enderror">
            @error('datum_eerst_volgende_levering')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>



        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Levering Toevoegen</button>
    </form>
</div>
