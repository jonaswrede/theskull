<?php
session_start();
include "../../../adapter/tsdb.php";
include "../../../web_logs/log_creator.php";
include "../../../module/user/class/User.php";
/**
 * @TODO: ADD User Status (DATA BASE AND VERIFY)
 */
if(isset($_POST["login"]) || $_SESSION["login"]!= true) {
    if (empty($_POST["username"]) || empty($_POST["pass"])) {
        echo "<script> alert('Username or password not set!'); window.location.href='../view/login_page.php'</script>";
    } else {
        $connect = new TSDb();

        $connect->set_charset("utf8");
        $username = $connect->real_escape_string($_POST['username']);
        echo "user:" . $username;
    }
}
