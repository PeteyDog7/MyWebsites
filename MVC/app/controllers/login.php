<?php

class Login extends Controller {
    
    function __construct() {
        
        parent::__construct();
        
    }

    function index() {
        
        $this->modelObj->pageSessionCount(PageID::$login_index);
        
        $this->view->render('login/index', 'Login');
        
        //$model = $this->model('login_model');

    }
    
    /*function error(){
        
        $this->view->render('login/error');
        
    }*/
    
    function create(){

        $this->modelObj->pageSessionCount(PageID::$login_create);
        
        $this->view->render('login/create', 'Create an Account');

    }
    
    function run(){

        $this->modelObj->run();
        
    }
    
}