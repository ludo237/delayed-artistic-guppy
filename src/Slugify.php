<?php

namespace Ludo237\Slugify;

use Illuminate\Foundation\Application;

/**
 * Class Slugify
 * @package Ludo237\Slugify
 */
final class Slugify
{
    /**
     * The Laravel application instance.
     *
     * @var \Illuminate\Foundation\Application
     */
    protected $app;
    
    /**
     * Normalized Laravel Version
     *
     * @var string
     */
    protected $version;
    
    /**
     * @var array
     */
    public $basket = [];
    
    /**
     * Slugify constructor.
     * @param \Illuminate\Foundation\Application $app
     */
    public function __construct(Application $app = null)
    {
        //Fallback when $app is not given
        $this->app = $app ?? app();
        $this->version = $app->version();
    }
    
    /**
     * @param int $length
     * @return string
     */
    public function slugify(int $length = 3) : string
    {
        $this->createBasket();
        
        $combination = $this->shuffleBasket($length);
        
        return implode("", $combination);
    }
    
    /**
     * Create the basket of words from config file
     */
    protected function createBasket() : void
    {
        $this->basket = array_merge(
            $this->app["config"]->get("slugify.adjectives"),
            $this->app["config"]->get("slugify.animals")
        );
    }
    
    /**
     * Shuffle the current basket of words
     *
     * @param int $length
     * @return array
     */
    protected function shuffleBasket(int $length) : array
    {
        return array_map(
            $this->app["config"]->get("slugify.format"),
            array_random($this->basket, $length)
        );
    }
}