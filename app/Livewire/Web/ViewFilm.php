<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;

class ViewFilm extends Component
{
    public $film;

    public function mount($filmId)
    {
        $this->film = Film::findOrFail($filmId);
    }

    public function render()
    {
        return view('livewire.web.view-film', [
            'film' => $this->film,
        ]);
    }
}
