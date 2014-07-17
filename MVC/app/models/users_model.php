<?php

class Users_Model extends Model {

    function __construct() {
        
        parent::__construct();
        
    }

    public function userList(){
        
        $statement = $this->db->prepare('SELECT ID, username, role, email FROM users');
        $statement->execute();
        return $statement->fetchAll();
        
    }
    
    public function getUser($id){
        
        $statement = $this->db->prepare('SELECT id, username, password, role, email FROM users WHERE ID = :id');
        $statement->execute(array(
            ':id'=>$id
        ));
        
        return $statement->fetch();
        
    }

    public function create($data){
                
        $statement = $this->db->prepare('INSERT INTO users (`username`, `email`, `password`, `role`) '
                .'VALUES (:username, :email, :password, :role)');
        
        $dbStatus = $statement->execute(array(
            ':username'=>$data['username'],
            ':password'=>$data['password'],
            ':email'=>$data['email'],
            ':role'=>$data['role']
        ));;
        
        //email confirmation
        $emailData = array(
            'address' => $data['email'],
            'username' => $data['username']
        );
        $emailStatus = $this->email($emailData);
        
        if($dbStatus&&$emailStatus){
            return true;
        }
        
    }
 
    public function delete($id){
        
        $statement = $this->db->prepare('DELETE FROM users WHERE id = :id AND role != "owner"');
        
        $statement->execute(array(
            ':id'=>$id
        ));
        
    }
            
    function email($emailData){
        
        $this->mail->PHPmail->clearAddresses();
        $this->mail->PHPmail->addAddress($emailData['address'],$emailData['username']);
        
        $this->mail->PHPmail->Subject = 'Email Confirmation';
        $this->mail->PHPmail->Body = 'Thank you, '.$emailData['username'].' for registering a account on MyWebsite.com!';
        //$this->mail->AltBody = $emailData['altBody'];
        
        
        if($this->mail->PHPmail->send()){
            return true;
        }
        else{
            return 'error:'.$this->mail->PHPmail->ErrorInfo;
        }
        
        $this->mail->PHPmail->clearAddresses();
        
    }
    
}