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
        $result = $connect->query("SELECT pass from login where lname= '".$_POST['username']."'");

        var_dump($result);

        foreach ($result as $value){
            $pass = $value["pass"];
        }

        if(password_verify($_POST["pass"],$pass)){
            $_SESSION["login"]=true;
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