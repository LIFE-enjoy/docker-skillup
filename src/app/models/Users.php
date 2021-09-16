<?php

use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class Users extends Phalcon\Mvc\Model
{
    public $user_id;
    public $user_name;
    public $user_email;

    public static function findAllUser() {
        
    }
}