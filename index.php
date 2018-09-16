<?php
session_start();

if($_SESSION["login"]!= true)
{
    header("location: module/login/view/login_page.php");
}

include "web_logs/log_creator.php";

?>
<html>
    <head>
        <title>
            Index
        </title>
    </head>
        <body>
            <form method ="POST" action="module/login/action/logout.php">
                <input type="SUBMIT" value="Logout" name="logout">
            </form>
            <?php
                if($_SESSION["usrgrp"]=="TSA"){
                    echo "Hello Admin";
                }
                echo "<br> Session started at ". $_SESSION["time"];
            ?>
        </body>
</html>
