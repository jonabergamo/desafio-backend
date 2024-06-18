<div class="max-w-screen-lg mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Lista de Filmes</h1>

        <!-- Formulário de Pesquisa -->
        <form action="{{ route('movies.index') }}" method="GET" class="mb-4">
            <div class="flex">
                <input type="text" name="search" placeholder="Pesquisar por título" class="rounded-l-lg p-2 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white">
                <button type="submit" class="px-8 rounded-r-lg bg-red-500  text-gray-200 font-bold p-2 border-red-500 border-b border-r border-t hover:bg-red-400">Pesquisar</button>
            </div>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-8">
            @foreach ($films as $film)
                <a href="{{ route('movies.show', ['filmId' => $film->id]) }}"
                   class="relative w-full aspect-video bg-cover bg-center bg-no-repeat"
                   style="background-image: url('{{ asset('storage/' . $film->cover) }}')">
                    <div class="absolute flex items-end p-4 top-0 left-0 w-full h-full bg-gradient-to-t from-black to-black/20">
                        <div>
                            <h1 class="text-2xl font-bold text-white">
                                {{ $film->title }}
                            </h1>
                            <h2 class="font-medium text-white">
                                Diretor: {{ $film->director }}
                            </h2>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Links de Paginação -->
        <div class="mt-4">
            {{ $films->links() }}
        </div>
    </div>