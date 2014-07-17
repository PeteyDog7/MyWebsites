<h2>Users</h2>
<p>This page displays all users.</p>
<p>(Owner Status only.)</p>
<hr/>
<h3>Add New User</h3>
<form action="/website/mvc/public/users/create" method="post">
    <label>Username</label><input type="text" name="username"/><br/>
    <label>Password</label><input type="text" name="password"/><br/>
    <label>Email</label><input type="email" name="email"/><br/>    
    <label>Role</label>
    <select name="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br/>
    <label>&nbsp;</label><input type="submit"/>
</form>
<h3>Current Users</h3>
<table id="currentUsers">
    <tbody>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Role</td>
            <td>Email</td>
            <td colspan="2">Options</td>
        </tr>
        <?php
        foreach ($this->userList as $key => $value) {
            if($value['email']==NULL){
                $value['email'] = 'None';
            }
            echo '<tr>';
            echo '<td>' . $value['ID'] . '</td>';
            echo '<td>' . $value['username'] . '</td>';
            echo '<td>' . $value['role'] . '</td>';
            echo '<td>' . $value['email'] . '</td>';
            echo '<td>';
            
            if($value['role']!='owner'){
                echo '<a href="/website/mvc/public/users/edit/'.$value['ID'].'">Edit</a>';
            }
            else{
                echo '<a href="/website/mvc/public/users/unavailable/" id="unavailable">Edit</a>';
            }
            
            echo '</td>';
            
            if($value['role']!='owner'){
                echo '<td><a href="/website/mvc/public/users/delete/'.$value['ID'].'">Delete</a>';
            }
            else{
                echo '<td><a href="/website/mvc/public/users/unavailable/" id="unavailable">Delete</a>';
            }
            
            echo '</td>';
            echo '</tr>';
        }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2"></td>
        </tr>
    </tbody>
</table>