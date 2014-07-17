<!DOCTYPE html>
<html>
    <head>
        <title><?php if(isset($this->title)){echo $this->title.' - ';} ?>MyWebsite.com</title>
        <!--<link rel="icon" type="image/ico" href="images/favicon2.ico">-->
        <link rel="stylesheet" href="/website/mvc/public/stylesheets/global.css"/>
        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script src="/website/mvc/public/javascripts/' . $js . '"></script>';
            }
        }
        ?>
        <?php Session::init(); ?>
    </head>
    <body>
        <div id="body">
            <div id="header">
                <nav>
                    <?php if (Session::get('loggedIn') == false): ?>
                        <a href="/website/mvc/public/home">Home</a>
                        <a href="/website/mvc/public/help">Help</a>
                    <?php endif; ?>
                    <?php if (Session::get('loggedIn')): ?>
                        <a href="/website/mvc/public/dashboard/index">Dashboard</a>
                        <?php if (Session::get('role') == 'owner'): ?>
                            <a href="/website/mvc/public/users">Users</a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (Session::get('loggedIn')): ?>
                        <a href="/website/mvc/public/dashboard/logout">Logout</a>
                    <?php else: ?>
                        <a href="/website/mvc/public/login">Login</a>
                    <?php endif; ?>
                </nav>
            </div>
            <div id="content">
                <div id="mainContent">