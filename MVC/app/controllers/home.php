<?php

class Home extends Controller {
    
    function __construct() {
        
        parent::__construct();
        
    }

    public function index() {
        
        $this->modelObj->pageSessionCount(PageID::$home_index);
        
        $this->view->render('home/index', 'Home');
        
        //$model = $this->model('home_model');

        /* User Model
        $user = $this->model('User');
        $user->name = 'Noah';
        
        $this->view('home/index');
         */
        
    }
    
    public function test(){
        
        $this->modelObj->pageSessionCount(PageID::$home_test);
        
        $this->view->render('home/test', 'Testing');
        
    }
    
}