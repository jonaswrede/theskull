<?php
session_start();

if($_SESSION["login"]!= true)
{
    header("location: module/login/view/login_page.php");
}
else
{
    header("location: module/main/view/index.php");
}
