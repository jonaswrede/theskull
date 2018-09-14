<?php
session_start();

if($_SESSION["login"]!= true)
{
    header("location: session/login_page.php");
}

include "web_log_creator/log_creator.php";

?>
<html>
    <head>
        <title>
            Index
        </title>
    </head>
        <body>
            <form method ="POST" action="session/kill_session.php">
                <input type="SUBMIT" value="Logout" name="logout">
            </form>
            <?php
                if($_SESSION["usrgrp"]=="TSA"){
                    echo "Hello Admin";
                    ?>
                    <form method="post" action="user/create_user.php">
                        <input type="Submit" value="Create User" name="create_user">
                    </form>
                <?php
                }
                echo "<br> Session started at ". $_SESSION["time"];
            ?>
        </body>
</html>
