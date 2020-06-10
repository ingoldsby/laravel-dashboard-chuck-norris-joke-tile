<?php

namespace Ingoldsby\ChuckNorrisJokeTile\Components;

use Ingoldsby\ChuckNorrisJokeTile\ChuckNorrisJokeStore;
use Livewire\Component;

class ChuckNorrisJokeComponent extends Component
{
    /** @var string */
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('dashboard-chuck-norris-joke-tiles::tile', [
            'joke' => ChuckNorrisJokeStore::make()->getChuckNorrisJoke(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.chuck_norris_joke.refresh_interval_in_seconds') ?? 900,
        ]);
    }
}