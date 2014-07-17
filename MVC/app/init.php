<?php

require_once 'config/database.php';
require_once 'config/PageID.php';
require_once 'core/PHPMailer/PHPMailerAutoload.php';

spl_autoload_register(function($class){
    if(file_exists('../app/core/'.$class.'.php')){
        require_once '../app/core/'.$class.'.php';
    }
});

/* 
 * Manual Load (Backup)
 * 
 * require_once 'core/App.php';
 * require_once 'core/Controller.php';
 * require_once 'core/View.php';
 * require_once 'core/Model.php';
 * require_once 'core/Database.php';
 * require_once 'core/Session.php';
 * require_once 'core/Mail.php';
 * 
 */
