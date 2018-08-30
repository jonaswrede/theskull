<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:14
 */

session_start();

if($_SESSION["login"]==true&&$_SESSION["usrgrp"=="tsa"]){
    echo "please wait";
}
else
{
    header("location: login_page.php");
}