<?php
session_start();

if($_SESSION["login"]!= true)
{

    header("location: ../../login/view/login_page.php");
}
?><!DOCTYPE HTML>
<html lang="EN">
    <head>
        <link rel="stylesheet" href="../../ext/bootstrap.min.css">
        <script src="../../ext/jquery-3.2.1.slim.min.js"></script>
        <script src="../../ext/bootstrap.min.js"></script>

        <meta charset="utf-8">
        <meta name="description" content="Main Page - The Skull">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">


        <title>
            Info
        </title>

        <style>
            body,main {
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0px;
                bottom: 0px;
            }
        </style>
    </head>

    <body>

        <div>
            <?php
            include "../../../template/menu.php";
            ?>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-5 col-md-3">
                    UserID:
                </div>
                <div class="col">
                    <?php
                    echo $_SESSION["uid"];
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-3">
                    Username:
                </div>
                <div class="col">
                    <?php
                    echo $_SESSION["uname"];
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-3">
                    Usertyp:
                </div>
                <div class="col">
                    <?php
                        echo ($_SESSION["usrgrp"]=="TSA"?"Admin":"User");
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-md-3">
                    Session Time:
                </div>
                <div class="col">
                    <?php
                    echo $_SESSION["time"];
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
