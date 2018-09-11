<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:14
 */

session_start();
#<?php

if($_SESSION["login"]!=true || $_SESSION["usrgrp"]!="TSA") {
    header("location: ../../index.php");
}
?>

<html>
    <title>
        Create User
    </title>
    <body>
        <h2>Create User</h2>
        <form method="post" action="create.php">
            <input type="text" placeholder="Username" name="user" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
            <input type="checkbox" value="Admin" name="grp">
            <input type="submit" value="Create" name="create">
        </form>
    </body>
</html>
