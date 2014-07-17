<h2 id="loginHeader">Login</h2><h4 id="createHeader">or <a href="/website/mvc/public/login/create">Create an Account</a></h4>
<form action="login/run" method="post">
    <label>Username</label><input type="text" name="username"/><br/>
    <label>Password</label><input type="password" name="password"/><br/>
    <label></label><input type="submit" value="Login" name="submit"/>
</form>
<?php
    if(Session::get('loggedIn')==false&&Session::get('loggedOut')==true){
        echo '<p id="loginSuccess">You have been successfully Logged Out!</p>';
        Session::clear('loggedOut');
    }
?>
<?php
    if(Session::get('logError')){
        echo '<p id="loginError">Wrong Username or Password. Please try again.</p>';
        Session::clear('logError');
    }
?>
