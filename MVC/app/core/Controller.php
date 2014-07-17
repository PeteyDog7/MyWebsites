<?php

class Controller {

    function __construct() {
        
        $this->view = new View();
        
        array_push($this->view->js, 'global/jquery.js', 'global/default.js');
        
    }

    public function model($model) {
        
        require_once '../app/models/'.$model.'.php';
        return new $model();
        
    }
    
    public function error(){
       
        //Make a error view but dont change controllers
        header('Location: /website/mvc/public/error');
        
    }

    /*
    public function view($view) {
        
        require_once '../app/views/'.$view.'.php';
        return new $view();
        
    }
    */
    
}