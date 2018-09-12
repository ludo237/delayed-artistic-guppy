<?php

namespace Ludo237\Slugify\Tests;

/**
 * HelpersTest
 * @package Ludo237\Slugify\Tests
 */
final class HelpersTest extends \Orchestra\Testbench\TestCase
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

    /** @test */
    public function it_generates_a_random_slug()
    {
        $this->assertNotNull(slugify());
    }
    
    /** @test */
    public function slugify_accepts_a_length_as_variable()
    {
        $this->assertCount(3, $this->explode(slugify()));
        $this->assertCount(4, $this->explode(slugify(4)));
    }
    
    private function explode(string $string) : array
    {
        $string = preg_replace('/(?<!^)([A-Z])/', '-\\1', $string);
        
        return explode("-", $string);
    }
}