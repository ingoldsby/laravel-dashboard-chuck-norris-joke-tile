<?php

namespace Ingoldsby\ChuckNorrisJokeTile;

use Illuminate\Support\ServiceProvider;
use Ingoldsby\ChuckNorrisJokeTile\Commands\FetchChuckNorrisJokeCommand;
use Ingoldsby\ChuckNorrisJokeTile\Components\ChuckNorrisJokeComponent;
use Livewire\Livewire;

class ChuckNorrisJokeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchChuckNorrisJokeCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-chuck-norris-joke-tiles'),
        ], 'dashboard-chuck-norris-joke-tiles');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-chuck-norris-joke-tiles');

        Livewire::component('chuck-norris-joke-tile', ChuckNorrisJokeComponent::class);
        
    }
}
