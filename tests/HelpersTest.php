<?php

namespace Ludo237\DelayedArtisticGuppy\Tests;

/**
 * HelpersTest
 * @package Ludo237\DelayedArtisticGuppy\Tests
 */
final class HelpersTest extends TestCase
{
    /** @test */
    public function it_generates_a_random_slug()
    {
        $this->assertNotNull(delarg());
    }
    
    /** @test */
    public function delarg_accepts_a_length_as_variable()
    {
        $this->assertCount(3, $this->explode(delarg()));
        $this->assertCount(4, $this->explode(delarg(4)));
    }
}