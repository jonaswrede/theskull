<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 23.08.18
 * Time: 17:22
 */
session_start();

include "../../../web_logs/log_creator.php";

create_log("logout",$_SESSION["uid"],$_SESSION["uname"],"150 Logout");

session_destroy();

header("location: ../../../index.php");

?>