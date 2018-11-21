<?php
session_start();
include "../../../adapter/tsdb.php";
include "../../../web_logs/log_creator.php";
include "../../../module/user/class/User.php";

$a = include "../../../adapter/local.php";

error_reporting(-1);
ini_set('display_errors', 'On');
if(isset($_POST["login"]) || $_SESSION["login"]!= true)
{
    if(empty($_POST["username"]) || empty($_POST["pass"])){
        echo "<script> alert('Username or password not set!'); window.location.href='../view/login_page.php'</script>";
    }
    else{

        $connect = new TSDb($a);
        $result = $connect->select_user($_POST["username"]);
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

                $time = date('m/d/Y h:i:s a', time());

                $_SESSION["login"] = true;
                $_SESSION["uname"] = $uname;
                $_SESSION["uid"] = $uid;
                $_SESSION["time"] = (string)$time;
                $status = "100 SUCCESS";

                if($group == "1"){
                    $_SESSION["usrgrp"] = "TSA";
                }
                else{
                    $_SESSION["usrgrp"]= "Standard User";
                }
                create_log("login",$uid,$uname,$status);
                header("location: /index");
            }
            else{
                $status = "200 ERROR PWD";
                create_log("login",$uid,$uname,$status);
                echo
                "<script>alert('Credentials not correct !');window.location.href='../view/login_page.php';</script>";



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