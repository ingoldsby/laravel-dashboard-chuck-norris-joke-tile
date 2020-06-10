<?php

namespace Ingoldsby\ChuckNorrisJokeTile\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Ingoldsby\ChuckNorrisJokeTile\ChuckNorrisJokeStore;

class FetchChuckNorrisJokeCommand extends Command
{
    protected $signature = 'dashboard:fetch-chuck-norris-joke';

    protected $description = 'Fetch Joke';

    public function handle()
    {
        $this->info('Fetching Joke ...');

        $joke = Http::get('http://api.icndb.com/jokes/random')->json();

        ChuckNorrisJokeStore::make()->setChuckNorrisJoke($joke);

        $this->info('All done!');
    }
}