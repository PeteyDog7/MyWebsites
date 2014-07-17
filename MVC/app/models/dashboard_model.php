<?php

class Dashboard_Model extends Model {

    function __construct() {
        
        parent::__construct();
        
    }

    function ajaxInsert(){
        
        $text = $_POST['text'];
        
        $statement = $this->db->prepare('INSERT INTO dashboard (Text) VALUES (:text)');
        $dbStatus = $statement->execute(array(':text'=>$text));
        
        if($dbStatus){
            return true;
        }
        else{
            return false;
        }
        
        //echo json_encode($text);
        
    }
    
}