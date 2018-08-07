<?php

namespace application\models;

use application\core\Model;

class  Admin extends Model
{
    public $error;

    public function loginValidate($post)
    {
       
        $config = require 'application/config/admin.php';
        if ($config['login'] != $_POST['login'] or $config['password'] != $_POST['password']){
            $this->error = 'Логин или пароль указан неверно!';
            return false;
        }
        return true;
    }
}
 