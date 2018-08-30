<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:14
 */

session_start();

if($_SESSION["login"]==true && $_SESSION["usrgrp"]=="tsa"){
    ?>
    <html>
        <body>
        <h2>Create User</h2>
            <form method="post" action="user/create.php">
                <input type="text" placeholder="Username" name="user"><br>
                <input type="password" placeholder="Password" name="password"><br>
                <input type="submit" value="Create" name="create">
            </form>

        </body>
    </html>
<?php
}
else
{
    header("location: login_page.php");
}