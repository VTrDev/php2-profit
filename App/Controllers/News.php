<?php

namespace App\Controllers;

use App\MultiException;
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
        //print_r(debug_backtrace());
        //$ex = new Db('Сообщение об исключении');
        //throw $ex; 
    }
    
    protected function actionIndex()
    {        
        $this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
    
    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }
    
    protected function actionCreate()
    {
        try {
            $article = new \App\Models\News();
            $article->fill([]);
            $article->save();
        } catch (MultiException $e) {
            $this->view->errors = $e;
                       
        }
        $this->view->display(__DIR__ . '/../templates/create.php');
    }
}
