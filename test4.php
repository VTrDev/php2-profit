<?php

require __DIR__ . '/autoload.php';
/*
$authors = \App\Models\Author::findAll();
var_dump($authors); 
 */

/*
$news = \App\Models\News::findAll();
var_dump($news[0]->author); 
*/



function first() {
    echo ' First ';
    return false;
}

function second() {
    echo ' Second ';
    return true;
}

var_dump(first() && second()); // First bool(false)
var_dump(second() || first()); // Second bool(true)