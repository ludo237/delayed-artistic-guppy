<?php

namespace Ludo237\Slugify\Tests;

/**
 * TestCase
 * @package Ludo237\Slugify\Tests
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Ludo237\Slugify\SlugifyServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            "Slugify" => \Ludo237\Slugify\Facades\Slugify::class
        ];
    }

    protected function explode(string $string) : array
    {
        $string = preg_replace('/(?<!^)([A-Z])/', '-\\1', $string);
        
        return explode("-", $string);
    }
}