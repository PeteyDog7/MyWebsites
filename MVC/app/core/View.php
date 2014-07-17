<?php

class View {
        
    function __construct() {
        
        $this->js = array();
        
    }

    public function render($name, $title = NULL) {
        
        if(isset($title)){
            $this->title = $title;
        }
        
        require '../app/views/global/header.php';
        require '../app/views/'.$name.'.php';
        require '../app/views/global/footer.php';
        
    }
    
}