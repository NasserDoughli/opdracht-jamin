<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">

<a href="/overzicht-leverancier" class="inline-block px-4 py-2 text-sm text-white bg-gray-500 rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">
    Terug naar Overzicht
</a>

<form action="{{ route('leverancier.update', $leverancier->id) }}" method="post" class="space-y-6 bg-white p-6 rounded shadow-md max-w-md mx-auto">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="naam" class="block text-sm font-medium text-gray-700">Naam</label>
        <input type="text" id="naam" name="naam" value="{{ old('naam', $leverancier->naam) }}"
               class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('naam') border-red-500 @enderror">
        @error('naam')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="contact_persoon" class="block text-sm font-medium text-gray-700">Contact Persoon</label>
        <input type="text" id="contact_persoon" name="contact_persoon" value="{{ old('contact_persoon', $leverancier->contact_persoon) }}"
               class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('contact_persoon') border-red-500 @enderror">
        @error('contact_persoon')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="leverancier_nummer" class="block text-sm font-medium text-gray-700">Leverancier Nummer</label>
        <input type="text" id="leverancier_nummer" name="leverancier_nummer" value="{{ old('leverancier_nummer', $leverancier->leverancier_nummer) }}"
               class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('leverancier_nummer') border-red-500 @enderror">
        @error('leverancier_nummer')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="mobiel" class="block text-sm font-medium text-gray-700">Mobiel</label>
        <input type="text" id="mobiel" name="mobiel" value="{{ old('mobiel', $leverancier->mobiel) }}"
               class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('mobiel') border-red-500 @enderror">
        @error('mobiel')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="opmerking" class="block text-sm font-medium text-gray-700">Opmerking</label>
        <textarea id="opmerking" name="opmerking" rows="3"
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('opmerking') border-red-500 @enderror">{{ old('opmerking', $leverancier->opmerking) }}</textarea>
        @error('opmerking')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Update
        </button>
    </div>
</form>
