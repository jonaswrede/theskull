<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 22.08.18
 * Time: 16:20
 */

session_start();

if($_SESSION["login"]){
    header('Location: index.php');
}

var_dump($_SESSION);

?>

<html>
<body>
<form action="verify.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="Submit" name="login" value="Login">
</form>
</body>
</html>



