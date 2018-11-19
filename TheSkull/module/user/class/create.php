<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:40
 */
/*
session_start();

if($_SESSION["login"]==true && $_SESSION["usrgrp"]=="tsa") {
    include "../adapter/connect.php";

    $connect = get_connection();
    $result = $connect->query("SELECT id,pass from login where lname= '" . $_POST['username'] . "'");

    var_dump($result);

    if (mysqli_num_rows($result) == 0) {
        echo "2";
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $result = $connect->query("INSERT INTO login (id,pass) VALUES ('" . $_POST['username'] . "','" . $password . "')");

        echo "<br>User ".$_POST["username"]." is created, with pw ". $password;

        var_dump($result);

    }
    else {
        echo "<script> alert ('Username bereits vorhanden!')</script>";
    }

}
else{

        echo "error";

}
