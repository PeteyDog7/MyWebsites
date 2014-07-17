<?php

class Mail extends PHPMailer {

    function __construct() {
        
        parent::__construct();
        
        $this->SMTPAuth = true;
        $this->SMTPDebug = 2;
        
        $this->Host = 'smtp.gmail.com';
        $this->Username = 'bontkurrack@gmail.com';
        $this->Password= '';
        
        $this->SMTPSecure = 'ssl';
        $this->Port = 465;
        
        $this->From = 'bontkurrack@gmail.com';
        $this->FromName = 'Noah\'s Website';
        
        $this->addReplyTo('bontkurrack@gmail.com','Reply Address');
        
        /*$this->mail->clearAdresses();
        $this->mail->addReplyTo('bontkurrack@gmail.com','Reply Address');
        $this->mail->addAddress('bontkurrack@gmail.com','Noah');
        $this->mail->clearAdresses();
        
        $this->mail->Subject = 'Test PHPMailer Email Subject';
        $this->mail->Body = 'Test PHPMailer Email Body';
        //$this->mail->AltBody = 'Test PHPMailer Email AltBody';
        
        
        if($this->mail->send()){
            
        }
        else{
            //$this->mail->errorInfo;
        }*/
        
    }
    
    function send(){
        
        
        
    }
    
}