<?php

class App {

//    default
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = array();

    public function __construct() {
        
        $url = $this->parseUrl();
        
//        debugging
/*
        if(isset($url)){
        
            print_r($url);
            echo '<br/>';
            
        } 
*/
        
        if(isset($url[0])){
            
            if(file_exists('../app/controllers/'.$url[0].'.php')) {
            
                $this->controller = $url[0];
                unset($url[0]);
            
            }
            else{

                $this->controller = 'error';
                
            }
            
        }
        
        //echo $this->controller.'<br/>';
                
        //echo $this->method.'<br/>';
        
        $this->controllerName = $this->controller;
        
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;
        
        if(isset($url[1])) {
            
            //echo $url[1].'<br/>';

            if(method_exists($this->controller, $url[1])) {
                
                $this->method = $url[1];
                unset($url[1]);
                
            }
            else {
                
                $this->method = 'error';
                
            }
            
        }
        
        $this->controller->modelObj = $this->controller->model($this->controllerName.'_model');
        
        
        $this->params = $url ? array_values($url) : [];
        
        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }

    public function parseUrl() {
        
        if(isset($_GET['url'])) {
            
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            
        }
        
    }
    
}