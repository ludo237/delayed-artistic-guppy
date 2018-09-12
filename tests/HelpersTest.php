<?php

namespace Ludo237\Slugify\Tests;

/**
 * HelpersTest
 * @package Ludo237\Slugify\Tests
 */
final class HelpersTest extends TestCase
{
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
}