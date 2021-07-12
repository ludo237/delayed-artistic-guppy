<?php

namespace Ludo237\DelayedArtisticGuppy\Tests;

use Ludo237\DelayedArtisticGuppy\DelargServiceProvider;
use Ludo237\DelayedArtisticGuppy\Facades\Slugify;

/**
 * TestCase
 * @package Ludo237\DelayedArtisticGuppy\Tests
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app) : array
    {
        return [DelargServiceProvider::class];
    }
    
    protected function getPackageAliases($app) : array
    {
        return [
            "Slugify" => Slugify::class,
        ];
    }
    
    protected function explode(string $string) : array
    {
        $string = preg_replace('/(?<!^)([A-Z])/', '-\\1', $string);
        
        return explode("-", $string);
    }
}
