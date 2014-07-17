<?php

class Login_Model extends Model {

    function __construct() {
        
        parent::__construct();
        
    }

    public function run(){
        
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $statement = $this->db->prepare("SELECT ID,role FROM users "
                . "WHERE Username = :username AND Password = :password");
        
        $statement->execute(array(
            ':username'=>$username,
            ':password'=>$password
        ));
        
        $data = $statement->fetch();
        $rowCount = $statement->rowCount();
        
        Session::init();
            
        if($rowCount>0){
            
            //login
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            
            header('location: ../dashboard');
            
        }
        else {
            
            //login error
            Session::set('loggedIn', false);
            Session::set('logError', true);
            
            header('location: ../login');
            
        }
    }
    
}