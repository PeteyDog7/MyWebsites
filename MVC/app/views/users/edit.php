<h3>Edit User: <?php echo $this->user['username']; ?></h3>
<form action="/website/mvc/public/users/save" method="post">
    <label>User ID</label><label id="editIDLabel"><?php echo $this->user['id']; ?></label><br/>
    <label>Username</label><input type="text" name="username" value="<?php echo $this->user['username']; ?>"/><br/>
    <label>Email</label><input type="text" name="email" value="<?php echo $this->user['email']; ?>"/><br/>    
    <label>Role</label>
    <select name="role">
        <option value="default" <?php if($this->user['role']=='default'){ echo 'selected'; } ?>>Default</option>
        <option value="admin" <?php if($this->user['role']=='admin'){ echo 'selected'; } ?>>Admin</option>
    </select><br/>
    <label>Reset Password</label><input type="checkbox" name="resetPassword" id="resetPassCheck" value="true"/><br/>
    <label>&nbsp;</label><input type="submit" value="Save Changes"/>
</form>
<form id="editCancel" action="/website/mvc/public/users/cancel" method="post">
    <input type="submit" value="Cancel"/>
</form>