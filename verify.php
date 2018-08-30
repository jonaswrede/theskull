<?php
session_start();

if(isset($_POST["login"])) {
    if(empty($_POST["username"]) || empty($_POST["pass"])){
        echo "<script> alert('Username or password not set!'); window.location.href='login_page.php'</script>";
    }
    else{
        $host_name = 'db748804796.db.1and1.com';
        $database = 'db748804796';
        $user_name = 'dbo748804796';
        $password = 'Tml321Bmg()=';
        $connect = new mysqli($host_name, $user_name, $password, $database);
        $result = $connect->query("SELECT id,pass from login where lname= '".$_POST['username']."'");

        #var_dump($result);

        foreach ($result as $value){
            $pass = $value["pass"];
            $id = $value["id"];
        }

        if(password_verify($_POST["pass"],$pass)){
            $_SESSION["login"]=true;

            /**
             *
             * @CHECK Admin Access
             */
            $result = $connect->query("SELECT * FROM user_to_group WHERE id_user='".$id."' AND id_group= '1'");
            $connect->close();

            if(mysqli_num_rows($result)>0){
                $_SESSION["usrgrp"]="tsa";
            }
            if(!$_SESSION["time"])
            {
                $time = date('m/d/Y h:i:s a', time());
                $_SESSION["time"] = (string)$time;
            }
            header("location: index.php");
        }
        else{
            echo "<script>alert('Credentials not correct !'); window.location.href='login_page.php'</script>";
        }
    }
}
else{
    header("location: login_page.php");
}