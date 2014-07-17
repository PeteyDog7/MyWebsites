<?php

class Mail {

    function __construct() {
        
        $this->PHPmail = new PHPMailer();
        
        $this->PHPmail->SMTPAuth = true;
        $this->PHPmail->SMTPDebug = 2;
        
        $this->PHPmail->Host = 'smtp.gmail.com';
        $this->PHPmail->Username = 'bontkurrack@gmail.com';
        $this->PHPmail->Password= 'nobo1967';
        
        $this->PHPmail->SMTPSecure = 'ssl';
        $this->PHPmail->Port = 465;
        
        $this->PHPmail->From = 'bontkurrack@gmail.com';
        $this->PHPmail->FromName = 'Noah\'s Website';
        
        $this->PHPmail->addReplyTo('bontkurrack@gmail.com','Reply Address');
        
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