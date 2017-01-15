<?php

namespace App\Controllers;

class News 
{
    public function actionIndex()
    {
        $view = new \App\View();
        $view->title = 'Мой крутой сайт!';
        $view->news = \App\Models\News::findAll();
        $view->display(__DIR__ . '/../templates/index.php');
    }
}
