<?php

require __DIR__ . '/autoload.php';

//declare (strict_types=1);

function sum(int $a, int $b)
{
    return $a + $b;
}

echo sum(1.2, 2.3);

$s = App\Singleton::instance();
$s->counter = 1;
var_dump($s);

$s = App\Singleton::instance();
var_dump($s);