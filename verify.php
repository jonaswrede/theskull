<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 20.08.18
 * Time: 12:40
 */

if(isset($_POST["login"]))
    $_SESSION["logged"] = "yes";

echo "session should be set";


var_dump($_SESSION);
