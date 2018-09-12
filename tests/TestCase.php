<?php

namespace Ludo237\DelayedArtisticGuppy\Tests;

/**
 * TestCase
 * @package Ludo237\DelayedArtisticGuppy\Tests
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Ludo237\DelayedArtisticGuppy\DelargServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            "Slugify" => \Ludo237\DelayedArtisticGuppy\Facades\Slugify::class
        ];
    }

    protected function explode(string $string) : array
    {
        $string = preg_replace('/(?<!^)([A-Z])/', '-\\1', $string);
        
        return explode("-", $string);
    }
}