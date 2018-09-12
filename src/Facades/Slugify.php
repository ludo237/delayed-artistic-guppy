<?php

namespace Ludo237\Slugify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Slugify
 * @package Ludo237\Slugify\Facades
 */
final class Slugify extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "slugify";
    }
}
