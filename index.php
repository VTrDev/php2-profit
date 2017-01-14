<?php

require __DIR__ . '/autoload.php';

$view = new \App\View;

$view->title = 'Мой крутой сайт!';
$view->news = \App\Models\News::findAll();

$view->display(__DIR__ . '/App/templates/index.php');