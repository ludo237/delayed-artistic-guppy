<?php

if (!function_exists("delarg")) {
    
    /**
     * Procedural generated slug
     *
     * @param int $length
     * @return string
     */
    function delarg(int $length = 3) : string
    {
        return app("delarg")->slugfy($length);
    }
}
