<?php

namespace App\Controllers;

use App\View;

class News 
{
    protected $view;

    public function __construct() 
    {
        $this->view = new View();
    }
    
    /**
     * Прокси-метод
     * @param type $action
     * @return type
     */
    public function action($action) 
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }
    
    protected function beforeAction()
    {        
    }
    
    protected function actionIndex()
    {        
        $this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
}
