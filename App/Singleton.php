<?php

namespace App;

class Singleton 
{
    public $counter;

    protected static $instance;

    protected function __construct() 
    {        
    }
    
    public static function instance() 
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }    
}
