<?php

use Adapter\tsdb;

session_start();


include "../../../adapter/tsdb.php";
include "../../../web_logs/log_creator.php";

/**
 * @TODO: ADD User Status (DATA BASE AND VERIFY)
 */

    if(isset($_POST["login"]) || $_SESSION["login"]!= true)
    {
        if(empty($_POST["username"]) || empty($_POST["pass"])){
            echo "<script> alert('Username or password not set!'); window.location.href='../view/login_page.php'</script>";
        }
        else{
            $connect = new tsdb();
            $result = $connect->query("SELECT lname,pass,id_group,id_user from login,user_to_group where lname= '".$_POST['username']."' AND login.id = user_to_group.id_user");
            $connect->close();


            if (mysqli_num_rows($result)==1){
                foreach ($result as $value){
                    $pass = $value["pass"];
                    $group = $value["id_group"];
                    $uname = $value["lname"];
                    $uid = $value["id_user"];
                }
                if(password_verify($_POST["pass"],$pass))
                {
                    $_SESSION["login"] = true;
                    $_SESSION["uname"] = $uname;
                    $_SESSION["uid"] = $uid;
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

                    create_log("login",$uid,$uname,$status);


                    header("location: /");
                }
                else{
                    $status = "200 ERROR PWD";
                    create_log("login",$uid,$uname,$status);
                    echo "<script>alert('Credentials not correct !'); window.location.href='../view/login_page.php'</script>";
                }
            }
            else{
                $status = "250 ERROR USR N.Exist";

                create_log("login",$uid=0,$_POST["username"],$status);
                echo "<script>alert('Credentials not correct !'); window.location.href='../view/login_page.php'</script>";

            }
        }
    }
    else{
        echo"<script>alert('Please login'); window.location.href='../view/login_page.php'</script>";
    }
?>