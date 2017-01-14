<?php

require __DIR__ . '/autoload.php';

//$authors = \App\Models\Author::findAll();
//var_dump($authors);

$news = \App\Models\News::findAll();
var_dump($news[3]->author);
