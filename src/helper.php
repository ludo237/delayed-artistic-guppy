<?php

if (!function_exists("slugify")) {
    
    /**
     * Procedural generated slug
     *
     * @param int $length
     * @return string
     */
    function slugify(int $length = 3) : string
    {
        $slugifier = app("slugify");
        
        return $slugifier->slugify($length);
    }
}