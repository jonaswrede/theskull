<?php
session_start();
include "../../../adapter/tsdb.php";
include "../../../web_logs/log_creator.php";
include "../../../module/user/class/User.php";
/**
 * @TODO: ADD User Status (DATA BASE AND VERIFY)
 */


error_reporting(-1);
ini_set('display_errors', 'On');

if(isset($_POST["login"]) || $_SESSION["login"]!= true) {
    if (empty($_POST["username"]) || empty($_POST["pass"])) {
        echo "<script> alert('Username or password not set!'); window.location.href='../view/login_page.php'</script>";
    } else {
        $host_name = 'db748804796.db.1and1.com';
        $database = 'db748804796';
        $user_name = 'dbo748804796';
        $password = 'Tml321Bmg()=';


        $connect = new TSDb();
        $result = $connect->select_user($_POST["username"]);
        $connect->close();

        var_dump($result);

        echo $result[0][0];
    }
}
