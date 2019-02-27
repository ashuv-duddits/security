<?php
require_once "init.php";
if (isUserAuthorized()) {
    //user authorized
    header('Location: index.php');
    die();
}
?>
Register and login form:<br /><br /><br />

Register: <br /><br />
<form action="register.php" method="POST">
    Login: <input type="text" name="login"><br />
    Password: <input type="text" name="password"><br />
    <input type="submit" value="Register">
</form>

<br />
<br />
<br />

Auth: <br /><br />
<form action="auth.php" method="POST">
    Login: <input type="text" name="login"><br />
    Password: <input type="text" name="password"><br />
    <input type="submit" value="Auth">
</form>