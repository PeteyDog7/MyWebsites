<?php

class Users extends Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        
        if($logged == false||$role != 'owner'){
            
            header('Location: /website/mvc/public/dashboard');
            
            exit();
        }
        
        array_push($this->view->js, 'users/users.js');
        
    }

    public function index() {
        
        $this->view->userList = $this->modelObj->userList();

        $this->modelObj->pageSessionCount(PageID::$users_index);
        
        $this->view->render('users/index', 'Users');
        
    }

    public function create(){
        
        $data = array();
        $data['username'] = $_POST['username'];
        $data['password'] = md5($_POST['password']);
        $data['email'] = $_POST['email'];
        $data['role'] = $_POST['role'];
        
        $status = $this->modelObj->create($data);
        
        if($status){
            Session::set('createStatus', true);
        }
        else{
            Session::set('createStatus', false);
        }
        
        header('Location: /website/mvc/public/users');
        
    }
    
    public function edit($id){
        
        $this->view->user = $this->modelObj->getUser($id);
        
        $this->modelObj->pageSessionCount(PageID::$users_edit);
        
        $this->view->render('users/edit', 'Edit User');
        
    }
    
    public function editSave($id){
        
        
        
    }

    public function unavailable(){
        
        Session::set('ownerEditFail', true);
        
        header('Location: /website/mvc/public/users');
        
    }

    public function cancel(){
        
        header('Location: /website/mvc/public/users');
        
    }

    public function delete($id){

        $this->modelObj->delete($id);

        header('Location: /website/mvc/public/users');
        
    }
    
}