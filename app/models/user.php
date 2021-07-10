<?php
namespace MVC\models;
// to call db() function yo use it
use MVC\core\model;

class user extends model {

    public function GetAllUsers(){
        $data = model::db()->rows("SELECT * FROM user");
        return $data;
    }

    public function GetUser($email , $password){
        $data = model::db()->rows("SELECT * FROM user WHERE `email`='$email' && `password`='$password'");
        return $data;
    }



}


?>