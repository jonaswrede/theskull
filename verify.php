<?php

if(isset($_POST["login"])) {
    if(empty($_POST["username"]) || empty($_POST["pass"])){
        echo "<script> alert('Username or password not set!') </script>";
        header("location: login_page.php");
    }
    else{
        $host_name = 'db748804796.db.1and1.com';
        $database = 'db748804796';
        $user_name = 'dbo748804796';
        $password = 'Tml321Bmg()=';
        $connect = mysqli_connect($host_name, $user_name, $password, $database);
        $query = 'SELECT pass from login where lname='.$_POST(["username"]);

        $result = $connect->query($query);

        var_dump($result);
    }
}