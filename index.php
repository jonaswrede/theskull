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
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Index
        </title>
    </head>

    <body>
    <div>
        <?php
        echo "test";
        include getcwd()."/template/menu.html";
        ?>
    </div>
        <form method ="POST" action="module/login/action/logout.php">
            <input type="SUBMIT" value="Logout" name="logout">
        </form>
        <div class="container">
            <?php
            if($_SESSION["usrgrp"]=="TSA"){
                echo "Hello Admin";
            }
                echo "<br> Session started at ". $_SESSION["time"];
            ?>
        </div>
    </body>
</html>
