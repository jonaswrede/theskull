<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:14
 */

session_start();
?>



<?php

if($_SESSION["login"]==true && $_SESSION["usrgrp"]=="tsa"){
    ?>
    <html>
        <body>
        <h2>Create User</h2>
            <form method="post" action="create.php">
                <input type="text" placeholder="Username" name="user" required><br>
                <input type="password" placeholder="Password" name="password" required><br>
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

