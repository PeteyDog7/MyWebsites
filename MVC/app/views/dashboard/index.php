<h2>Dashboard</h2>
<p>Welcome to your Dashboard!</p>
<form id="dashInsert" action="/website/mvc/public/dashboard/ajaxInsert" method="post">
    <input type="text" name="text"/>
    <input type="submit"/>
</form>
<?php
    if(Session::get('dashSuccess')){
        echo '<p id="dashSuccess">Form Submission Success!</p>';
        Session::clear('dashSuccess');
    }
    if(Session::get('dashFail')){
        echo '<p id="dashFail">Form Submission Failed! Please try again.</p>';
        Session::clear('dashFail');
    }
?>