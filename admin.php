<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 21.08.18
 * Time: 16:41
 */

session_start();

var_dump($_SESSION);

if($_SESSION["name"]!="jonas"){
    echo "You have no access to view this page";
}
else{
    echo "Hello Mr. Admin";
}
?>

<html>
<body>
<form action="index.php" method="post">
    <input type="submit" name="test" value="Zurück">
</form>
</body>
</html>