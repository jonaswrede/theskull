<?php
session_start();
include "../web_log_creator/log_creator.php";
ob_start();
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
            $result = $connect->query("SELECT lname,pass,id_group,id_user from login,user_to_group where lname= '".$_POST['username']."' AND login.id = user_to_group.id_user");
            $connect->close();

            if (mysqli_num_rows($result)>0){

                foreach ($result as $value){
                    $pass = $value["pass"];
                    $group = $value["id_group"];
                    $uname = $value["lname"];
                    $uid = $value["id_user"];
                }

                if(password_verify($_POST["pass"],$pass)){
                    $_SESSION["login"] = true;
                    $_SESSION["uname"] = $uname;
                    $status = "100 SUCCESS";

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

                    #create_log("login",$uid,$uname,$status);
                    $time = date('m/d/Y h:i:s a', time());

                    $path = "../web_logs/login_log.txt";
                    $ip = $_SERVER["REMOTE_ADDR"];
                    $log = "\nTESTTESTTEST";
                    if(file_put_contents($path,$log, FILE_APPEND)){
                        $_SESSION["log"] = "yes";
                        ECHO $log;

                    }
                    else{
                        $_SESSION["log"] = "no";
                        $_SESSION["log_text"] = $log;
                    };

                    header("location: ../index.php");
                }
                else{
                    $status = "200 ERROR PWD";
                    create_log("login",$uid,$uname,$status);
                    echo "<script>alert('Credentials not correct !'); window.location.href='login_page.php'</script>";
                }
            }
            else{
                $status = "250 ERROR USR N.Exist";

                create_log("login",$uid=0,$_POST["username"],$status);
                echo "<script>alert('Credentials not correct !'); window.location.href='login_page.php'</script>";

            }
        }
    }
    else{
        echo"<script>alert('Please login'); window.location.href='login_page.php'</script>";
    }
?>