<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 22.08.18
 * Time: 16:20
 */

session_start();

if($_SESSION["login"]){
    header('Location: welcome.php');
}

?>

<html>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="Submit" name="login" value="Login">
        </form>
    </body>
</html>


<?php

    if(isset($_POST["login"])) {
        if(empty($_POST["username"]) || empty($_POST["pass"])){
            echo "<script> alert('Username or password not set!') </script>";
        }
        else{
            $host_name = 'db748804796.db.1and1.com';
            $database = 'db748804796';
            $user_name = 'dbo748804796';
            $password = 'Tml321Bmg()=';
            $connect = mysqli_connect($host_name, $user_name, $password, $database);
            $query = 'SELECT pass from login where name='.$_POST(["username"]);

            $result = $connect->query($query);

            var_dump($result);
        }
    }

?>
