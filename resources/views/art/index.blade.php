<form method="GET" action="{{ route('arts.index') }}" class="flex space-x-4 mb-6">
    <label>
        <input type="text" name="search" value="{{ old('search', request('search')) }}" placeholder="Zoek een schilderij..."
               class="px-4 py-2 rounded bg-gray-800 text-gray-100 w-full">
    </label>
    <label>
        <select name="category_id" class="px-4 py-2 rounded bg-gray-800 text-gray-100">
            <option value="">Alle Categorieën</option>
            <option value="1" {{ old('category_id', request('category_id')) == '1' ? 'selected' : '' }}>Klassieke Kunst</option>
            <option value="2" {{ old('category_id', request('category_id')) == '2' ? 'selected' : '' }}>Surrealisme</option>
            <option value="3" {{ old('category_id', request('category_id')) == '3' ? 'selected' : '' }}>Moderne Kunst</option>
        </select>
    </label>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Filter</button>
</form>
<ul class="grid grid-cols-1 md:grid-cols-2 gap-8">
    @foreach($arts as $art)
        <div class="bg-gray-800 shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-white mb-4">{{ e($art->title) }}</h2>
            <p class="text-gray-400 mb-4">{{ e(Str::limit($art->description, 100)) }}</p>
            <img src="{{ asset('storage/' . e($art->art)) }}" alt="{{ e($art->title) }}" class="w-full h-auto rounded-lg mb-4">

            <a href="{{ route('arts.show', $art->id) }}" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300">Details</a>

            @auth
                <form method="POST" action="{{ route('artists.toggleStatus', $art->id) }}" class="mt-4">
                    @csrf
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        {{ $art->artist->is_alive ? 'Markeer als Overleden' : 'Markeer als Levend' }}
                    </button>
                </form>
            @endauth
        </div>
    @endforeach
</ul>
