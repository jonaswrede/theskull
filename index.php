<?php
session_start();

if(!$_SESSION["login"])
{
    header("location: session/login_page.php");
}
?>



<html>
    <head>
        <style>
            #tsa{
                display: none;
            }
        </style>
    </head>
        <body>
        <form method ="POST" action="session/kill_session.php">
            <input type="SUBMIT" value="Logout" name="loggout">
        </form>
        <?php

        if($_SESSION["usrgrp"]=="tsa"){
            echo "Hello Admin";
            ?>
            <form method="post" action="user/create_user.php">
                <input type="Submit" value="Create User" name="create_user">
            </form>
        <?php
        }
        echo "<br> Session started at ". $_SESSION["time"];
        ?>

        <div id="tsa">
          <br>  Only visible for admins!
        </div>

        </body>
</html>
