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

    <link rel="stylesheet" href="../../ext/bootstrap.min.css">
    <script src="../../ext/jquery-3.2.1.slim.min.js"></script>
    <script src="../../ext/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Main Page - The Skull">

    <title>
        Home
    </title>
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