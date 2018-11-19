<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 19.09.18
 * Time: 17:28
 */


session_start();
include "../../../adapter/TSDb.php";
include "../../../web_logs/log_creator.php";
include "../../../module/user/class/User.php";

/**
 * @TODO: ADD User Status (DATA BASE AND VERIFY)
 */

    if(isset($_POST["login"]) || $_SESSION["login"]!= true)
    {
        if(empty($_POST["username"]) || empty($_POST["pass"])){
            echo "<script> alert('Username or password not set!'); window.location.href='../view/login_page.php'</script>";
        }
        else {
            $user = new User($_POST["username"],$_POST["pass"]);
            if($user->check_credentials()==true){
                create_log("login",$user->getUid(),$user->getUname(),"100 Succsess");
                header("location: /index");
            }
            else{
                echo "fehler!!";
                var_dump($user);
            }

        }
    }