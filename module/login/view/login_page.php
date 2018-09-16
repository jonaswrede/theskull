<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 22.08.18
 * Time: 16:20
 */

session_start();


if($_SESSION["login"]){
    header('Location: ../index.php');
}


?>

<html>
<head>
    <title>
        Login
    </title>
</head>
    <body>
        <form action="../action/verify.php"  method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="Submit" name="login" value="Login">
        </form>
    </body>
</html>



