<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 20.08.18
 * Time: 16:24
 */
session_start();
var_dump($_SESSION);

$_SESSION["name"] = $_POST["name"];

echo "Hello ". $_SESSION["name"]."<br>";

echo "Your session was started at ". $_SESSION["time"];

?>
<html>
<body>
<form action="index.php" method="post">
    <input type="button" name="back" value="back">
</form>
</body>
</html>
