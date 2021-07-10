<?php

namespace MVC\core;

class app {
    private $controller = 'controller';

    private $method = 'index';

    private $params = [];

    public function __construct()
    {
        
        $this->url();
        $this->render();
    }

    private function url() 
    {
        if (!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/", $_SERVER['QUERY_STRING']);
            // print_r($url);
            //  this controller
            $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
            // this method
            $this->method     = isset($url[1]) ? $url[1] : "index";  
        
            unset($url[0] ,$url[1]);
            // print_r($url);
            // will make the array start start with 0;
            // this params
            $this->params = array_values($url);
            // print_r($this->params);
        }else {
            // to handle the url if here is nothing after the link like  '  mvc.test.......   '
            $this->controller = 'homecontroller';
            $this->method = 'index';
        }
    }
    // بترجعلي اسم الكونترولر والميثود
    private function render()
    {

        // echo $this->controller;
        // echo $this->method;

        $controller = "MVC\controllers\\".$this->controller;
        
        if(class_exists($controller)){
            
            $controller = new $controller;
            // echo 'class exist <br>';
            if(method_exists($controller, $this->method)){
                // echo 'method exist <br>';
                //var_dump([$controller,$this->method],$this->method);die;
                call_user_func_array([$controller,$this->method], $this->params );
                
            }else{
                echo 'method not exist';
            }


        }else {
            echo 'class not exist';
        }
    
    }
}
