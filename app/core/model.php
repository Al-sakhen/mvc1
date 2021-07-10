<?php

namespace MVC\core;
// to use database
use Dcblogdev\PdoWrapper\Database;

class model {

    static function db(){
        $options = [
            'username' => USERNAME,
            'database' => DATABASE,

            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => '3306',
        ];
        return $db = new Database ($options);
    }

}




?>