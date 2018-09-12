<?php

namespace Ludo237\Slugify\Tests;

use Ludo237\Slugify\Slugify;


/**
 * SlugifyTest
 * @package Ludo237\Slugify\Tests
 */
final class SlugifyTest extends TestCase
{
    /** @var Ludo237\Slugify\Slugify */
    private $mock;

    public function setUp()
    {
        parent::setUp();

        $this->mock = app("slugify");
    }

    /** @test */
   public function it_has_an_empty_basket_when_starts()
   {
       $this->assertInternalType("array", $this->mock->basket);
       $this->assertEquals(0, count($this->mock->basket));
   }

    /** @test */
    public function it_generates_a_random_slug()
    {
        $this->assertNotNull($this->mock->slugify());
    }
    
    /** @test */
    public function slugify_accepts_a_length_as_variable()
    {
        $this->assertCount(3, $this->explode($this->mock->slugify()));
        $this->assertCount(4, $this->explode($this->mock->slugify(4)));
    }
}