<?php

class Error extends Controller {

    function __construct() {
        
        parent::__construct();
        
    }

    public function index() {
        
        //$model = $this->model('error_model');
        
        //$this->view->back = $model->back();
        
        $this->modelObj->pageSessionCount(PageID::$error_index);
        
        $this->view->render('error/index', 'Error');
        
    }

}