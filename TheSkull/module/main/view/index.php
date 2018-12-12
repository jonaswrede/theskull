<?php
session_start();

if($_SESSION["login"]!= true)
{

    header("location: ../../login/view/login_page.php");
}
?><!DOCTYPE HTML>
<html lang="EN">
<head>
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <meta name="description" content="Main Page - The Skull">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <script src="../../ext/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="../../ext/bootstrap.min.css">

    <title>
        Index
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
<div class="container mt-2">
    <div class="row">
        <div class="column">
            <?php
                if($_SESSION["usrgrp"]=="TSA"){
                    echo "Hello Admin";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <?php
                echo "Session started at ". $_SESSION["time"];
            ?>
        </div>
    </div>
</div>
</body>
</html>
