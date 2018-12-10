<?php
session_start();
include "../../../adapter/tsdb.php";
include "../../../web_logs/log_creator.php";
include "../../../module/user/class/User.php";

$a = include "../../../adapter/local.php";

$ajax = isset($_POST['ajax'])?true:false;

if(!isset($_SESSION["login"]))
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
                if($ajax==true)
                {

                    echo "Success";
                }
                else
                    {
                    header("location: /index");
                }
                create_log("login",$uid,$uname,$status);
            }
            else{
                $status = "200 ERROR PWD";
                create_log("login",$uid,$uname,$status);
                if($_POST["ajax"]=="true")
                {
                    echo "PW ERROR";
                }
                else {
                    header("location: ../view/login_page.php?check=0");
                }
            }
        }
        else{
            $status = "250 ERROR USR N.Exist";
            create_log("login",$uid=0,$_POST["username"],$status);
            if($ajax==true)
            {
                echo "USER ERROR";
            }
            else{
                header('location: https://theskull.de/module/login/view/login_page.php?check=0');
            }
        }
    }
}
else{
    if($ajax==true)
    {
        echo "Session already set";
    }
    else{
        header("location: ../view/login_page.php");
    }
}
?>