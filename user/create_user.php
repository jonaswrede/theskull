<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:14
 */

session_start();
?>

    <html>
    <title>
        Create User
    </title>

<body>

<?php

if($_SESSION["login"]==true && $_SESSION["usrgrp"]=="TSA"){
    ?>

        <h2>Create User</h2>
            <form method="post" action="create.php">
                <input type="text" placeholder="Username" name="user" required><br>
                <input type="password" placeholder="Password" name="password" required><br>
                <input type="submit" value="Create" name="create">
            </form>

<?php
}
else
{
    header("location: ../session/login_page.php");
}

?>

</body>
    </html>
