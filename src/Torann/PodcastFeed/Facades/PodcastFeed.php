<?php

namespace Krakero\PodcastFeed\Facades;

use Illuminate\Support\Facades\Facade;

class PodcastFeed extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'krakero.podcastfeed';
    }
}
