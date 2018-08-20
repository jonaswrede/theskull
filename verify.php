<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 20.08.18
 * Time: 12:40
 */

if(isset($_POST["login"]))
    $_SESSION["logged"] = "yes";


header("Location: index.php");

