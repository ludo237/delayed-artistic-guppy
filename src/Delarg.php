<?php

namespace Ludo237\DelayedArtisticGuppy;

use Illuminate\Foundation\Application;

/**
 * Class Delarg
 * @package Ludo237\DelayedArtisticGuppy
 */
final class Delarg
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
     * Delarg constructor.
     * 
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
    public function slugfy(int $length = 3) : string
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
            $this->app["config"]->get("delarg.adjectives"),
            $this->app["config"]->get("delarg.animals")
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
            "ucfirst",
            array_random($this->basket, $length)
        );
    }
}