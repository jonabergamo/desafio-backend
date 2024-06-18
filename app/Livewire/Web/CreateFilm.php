<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Film;

class CreateFilm extends Component
{
    use WithFileUploads;

    public $title;
    public $summary;
    public $cover;

    public function saveFilm()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'cover' => 'required|image|max:1024',
        ]);

        $coverPath = $this->cover->store('covers', 'public');

        $film = Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $coverPath,
        ]);

        return redirect()->route('movies.show', ['filmId' => $film->id]);
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
