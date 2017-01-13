<?php

namespace App;

class View 
{
    protected $data = [];
    
    public function __set($k, $v) 
    {
        $this->data[$k] = $v;
    }
    
    public function __get($k)
    {
        return $this->data[$k];
    }
    
    /**
     * 
     * @param $template string Путь к шаблону
     */
    public function display($template)
    {
        include $template;
    }
}
