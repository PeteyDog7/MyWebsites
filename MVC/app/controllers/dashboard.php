<?php

class Dashboard extends Controller {
    
    function __construct() {
        
        parent::__construct();
        
        Session::init();
        $logged = Session::get('loggedIn');
        
        if($logged == false){
            
            header('Location: /website/mvc/public/login');
            
            exit();
            
        }
        
        array_push($this->view->js, 'dashboard/dashboard.js');
        
    }

    public function index() {
        
        $this->modelObj->pageSessionCount(PageID::$dashboard_index);
        
        $this->view->render('dashboard/index', 'Dashboard');
        
    }
    
    /*function success(){
        
        $this->view->render('dashboard/success');
        
    }*/
            
    function logout() {
        
        Session::set('loggedIn', false);
        Session::set('loggedOut', true);
        header('Location: ../login');
            
        exit();
        
    }
    
    function ajaxInsert(){
        
        $status = $this->modelObj->ajaxInsert();
        
        if($status){
            Session::set('dashSuccess', true);
        }
        else{
            Session::set('dashFail', true);
        }
        
        header('Location: ../dashboard');
        
    }
    
}