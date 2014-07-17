<?php

class Model {

    function __construct() {
        
        $this->db = new Database();
        
        $this->mail = new Mail();
        
    }
    
    function email($emailData){
        
        $this->mail->PHPmail->clearAddresses();
        $this->mail->PHPmail->addAddress($emailData['address'],$emailData['addressName']);
        
        $this->mail->PHPmail->Subject = $emailData['subject'];
        $this->mail->PHPmail->Body = $emailData['body'];
        //$this->mail->AltBody = $emailData['altBody'];
        
        
        if($this->mail->PHPmail->send()){
            return true;
        }
        else{
            return $this->mail->PHPmail->ErrorInfo;
        }
        
        $this->mail->PHPmail->clearAddresses();
        
    }
    
    public function pageSessionCount($pageID) {
        
        Session::init();
        
        $count = 0;

	if (!isset($pageID)) {
		$pageID = 0;
	}

	switch ($pageID) {

		case '1':
			if (isset($_SESSION["counter1"])) {
				$count = $_SESSION["counter1"];
			}
			$_SESSION["counter1"] = $count + 1;
		break;
                
		case '2':
			if (isset($_SESSION["counter2"])) {
				$count = $_SESSION["counter2"];
			}
			$_SESSION["counter2"] = $count + 1;
		break;
                
		case '3':
			if (isset($_SESSION["counter3"])) {
				$count = $_SESSION["counter3"];
			}
			$_SESSION["counter3"] = $count + 1;
		break;
                
		case '4':
			if (isset($_SESSION["counter4"])) {
				$count = $_SESSION["counter4"];
			}
			$_SESSION["counter4"] = $count + 1;
		break;
                
		case '5':
			if (isset($_SESSION["counter5"])) {
				$count = $_SESSION["counter5"];
			}
			$_SESSION["counter5"] = $count + 1;
		break;
                
		case '6':
			if (isset($_SESSION["counter6"])) {
				$count = $_SESSION["counter6"];
			}
			$_SESSION["counter6"] = $count + 1;
		break;
                
		case '7':
			if (isset($_SESSION["counter7"])) {
				$count = $_SESSION["counter7"];
			}
			$_SESSION["counter7"] = $count + 1;
		break;
		case '8':
			if (isset($_SESSION["counter8"])) {
				$count = $_SESSION["counter8"];
			}
			$_SESSION["counter8"] = $count + 1;
		break;
                
		case '9':
			if (isset($_SESSION["counter9"])) {
				$count = $_SESSION["counter9"];
			}
			$_SESSION["counter9"] = $count + 1;
		break;
                
		case '10':
			if (isset($_SESSION["counter10"])) {
				$count = $_SESSION["counter10"];
			}
			$_SESSION["counter10"] = $count + 1;
		break;
                
	}
        
        Session::set('pageSessionCount', $count);
        
    }
    
}