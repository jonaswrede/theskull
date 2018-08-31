<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 30.08.18
 * Time: 18:40
 */

session_start();

if($_SESSION["login"]==true && $_SESSION["usrgrp"]=="tsa") {

    echo "1";

    $host_name = 'db748804796.db.1and1.com';
    $database = 'db748804796';
    $user_name = 'dbo748804796';
    $password = 'Tml321Bmg()=';
    $connect = new mysqli($host_name, $user_name, $password, $database);
    $result = $connect->query("SELECT id,pass from login where lname= '" . $_POST['uname'] . "'");

    if (mysqli_num_rows($result) == 0) {
        echo "2";
        $password = password_hash($_POST["password"]);
        $result = $connect->query("INSERT INTO login (id,pass) VALUES ('" . $_POST['uname'] . "','" . $password . "')");

        var_dump($result);

    }
    else {
        echo "<script> alert ('Username bereits vorhanden!')</script>";
    }

}
else{

        echo "error";

}
