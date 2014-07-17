<?php

class Help extends Controller {
    
    function __construct() {
        
        parent::__construct();
        
    }

    public function index() {
        
        $this->modelObj->pageSessionCount(PageID::$help_index);
        
        $this->view->render('help/index', 'Help');
        
    }
    
}