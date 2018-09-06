<?php
session_start();
#ob_start();
#$_SESSION["last_action"] = "login";
/**
 * @TODO: ADD User Status (DATA BASE AND VERIFY)
 */

    if(isset($_POST["login"]) || $_SESSION["login"]!= true)
    {
        if(empty($_POST["username"]) || empty($_POST["pass"])){
            echo "<script> alert('Username or password not set!'); window.location.href='login_page.php'</script>";
        }
        else{
            $host_name = 'db748804796.db.1and1.com';
            $database = 'db748804796';
            $user_name = 'dbo748804796';
            $password = 'Tml321Bmg()=';
            $connect = new mysqli($host_name, $user_name, $password, $database);
            $result = $connect->query("SELECT lname,pass,id_group from login,user_to_group where lname= '".$_POST['username']."' AND login.id = user_to_group.id_user");
            $connect->close();

            if (mysqli_num_rows($result)>0){

                foreach ($result as $value){
                    $pass = $value["pass"];
                    $group = $value["id_group"];
                    $uname = $value["lname"];
                }

                if(password_verify($_POST["pass"],$pass)){
                    $_SESSION["login"] = true;
                    $_SESSION["uname"] = $uname;
                    $_SESSION["status"] = 100;

                    if($group == "1"){
                        $_SESSION["usrgrp"] = "TSA";
                    }
                    else{
                        $_SESSION["usrgrp"]= "Standard User";
                    }
                    if(!$_SESSION["time"]) {
                        $time = date('m/d/Y h:i:s a', time());
                        $_SESSION["time"] = (string)$time;
                    }

                   # ob_start();

                    header("location: ../index.php");
                    #echo "<script>window.location.href='../index.php'</script>";
                }
                else{
                    $_SESSION["STATUS"] = 200;
                    echo "<script>alert('Credentials not correct !'); window.location.href='login_page.php'</script>";
                }
            }
            else{
                $_SESSION["STATUS"] = 250;
                echo "<script>alert('Credentials not correct !'); window.location.href='login_page.php'</script>";

            }
        }
    }
    else{
        echo"<script>alert('Please login'); window.location.href='login_page.php'</script>";
    }
?>