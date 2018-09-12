<?php

if (!function_exists("slugfy")) {
    /**
     * Procedural generated slug
     *
     * @param int $length
     * @return string
     */
    function slugfy(int $length = 3) : string
    {
        $slugifier = app("slugfy");
        
        return $slugifier->slugify($length);
    }
}