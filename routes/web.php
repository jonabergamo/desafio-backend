<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', App\Livewire\Web\Home::class)->name('home');
Route::get('/movies', App\Livewire\Web\MovieList::class)->name('movies.index');
Route::get('/movies/create', App\Livewire\Web\CreateFilm::class)->name('movies.create');
Route::get('/movies/{filmId}', App\Livewire\Web\ViewFilm::class)->name('movies.show');
