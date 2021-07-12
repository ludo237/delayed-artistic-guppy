<?php

namespace Ludo237\DelayedArtisticGuppy\Tests;

use Ludo237\DelayedArtisticGuppy\Slugify;

/**
 * DelargTest
 * @package Ludo237\DelayedArtisticGuppy\Tests
 */
final class DelargTest extends TestCase
{
    /** @var Ludo237\DelayedArtisticGuppy\Delarg */
    private $mock;
    
    public function setUp() : void
    {
        parent::setUp();
        
        $this->mock = app("delarg");
    }
    
    /** @test */
    public function it_has_an_empty_basket_when_starts()
    {
        $this->assertIsArray($this->mock->basket);
        $this->assertEquals(0, count($this->mock->basket));
    }
    
    /** @test */
    public function it_generates_a_random_slug()
    {
        $this->assertNotNull($this->mock->slugfy());
    }
    
    /** @test */
    public function slugfy_accepts_a_length_as_variable()
    {
        $this->assertCount(3, $this->explode($this->mock->slugfy()));
        $this->assertCount(4, $this->explode($this->mock->slugfy(4)));
    }
}
