<?php

namespace Ludo237\DelayedArtisticGuppy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Delarg
 * @package Ludo237\DelayedArtisticGuppy\Facades
 */
final class Delarg extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return "delarg";
    }
}
