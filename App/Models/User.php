<?php

namespace App\Models;

use App\Model;

/**
 * Class User
 * @package App\Model
 * 
 * @property int $age Возраст
 */
class User extends Model implements HasEmail
{
    const TABLE = 'users';
    
    public $email;
    public $name;    
    
    /**
     * Метод, возвращающий адрес e-mail
     * @deprecated
     * @return string Адрес электронной почты
     */
    public function getEmail() {
        return $this->email;
    }
}