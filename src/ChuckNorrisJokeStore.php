<?php

namespace Ingoldsby\ChuckNorrisJokeTile;

use Spatie\Dashboard\Models\Tile;

class ChuckNorrisJokeStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("chuck_norris_joke");
    }

    public function setChuckNorrisJoke($info) : self
    {
        $this->tile->putData('chuck_norris_joke', $info);

        return $this;
    }

    public function getChuckNorrisJoke()
    {
        return $this->tile->getData('chuck_norris_joke') ?? [];
    }

}
