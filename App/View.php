<?php

namespace App;

class View implements \Countable
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
    public function render($template)
    {
        ob_start();
        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    /**
     * 
     * @param $template string Путь к шаблону
     */
    public function display($template)
    {
        echo $this->render($template);
    }

    /**
     * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count(): int 
    {
        return count($this->data);
    }

}
