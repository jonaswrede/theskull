<?php


include "../adapter/local.php";
include "../adapter/TSDb.php";

error_reporting(E_ALL);
/*$string = "test";

#$crypt = password_hash($string,PASSWORD_BCRYPT);
$crypt = '$2y$10$YBCWK4haM/DE0RcdoF9Mhus1mYcwVJ7EuhDdc5XORQLIiP4FuyvCi';

echo $crypt;

*/

if(password_verify('abc','$2y$10$uHQ5Ms9W2ZlV76XAqDU0lujBMttBmU/CFtqWN//u43bx6GN48i6Im')){

    echo "<br>verify";
}
else
    echo "<br> failed";

/*
$db = new TSDb($a);

$userid = $db->select_user_id('jonas');

$verify = $db->verify_user($userid);

echo $verify==true?'success':'fail';







?>