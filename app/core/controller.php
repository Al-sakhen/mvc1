<?php

namespace MVC\core;
// to use database
use Dcblogdev\PdoWrapper\Database;

class controller{

    public function view ($path,$parm){
        // take multiple values in array ********* very important function
        extract($parm);
        
        require_once(VIEW.$path.".php");
    }

    
}


?>