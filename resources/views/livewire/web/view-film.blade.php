
    <div class="max-w-screen-lg mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold">{{ $film->title }}</h1>
            <a href="{{ route('movies.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded-lg">Voltar</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div>
                <img src="{{ asset('storage/' . $film->cover) }}" alt="{{ $film->title }}" class="rounded-lg shadow-lg">
            </div>
            <div>
                <p class="text-lg">{{ $film->summary }}</p>
            </div>
        </div>
    </div>

