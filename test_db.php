<?php

include "adapter/tsdb.php";

$host_name = 'db748804796.db.1and1.com';
$database = 'db748804796';
$user_name = 'dbo748804796';
$password = 'Tml321Bmg()=';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>Verbindung zum MySQL Server fehlgeschlagen: '.mysqli_connect_error().'</p>');
} else {
    echo '<p>Verbindung zum MySQL Server erfolgreich aufgebaut.</p >';
}


$result = $connect->query("SELECT lname,pass,id_group,id_user from login,user_to_group where lname= 'jonas' AND login.id = user_to_group.id_user");

var_dump($result);

$tsdb = new \TSDBase\tsdb();
echo"<br>";

$query="SELECT lname,pass,id_group,id_user from login,user_to_group where lname= 'jonas' AND login.id = user_to_group.id_user";

$result2 = $tsdb->query($query);

var_dump($result2);


var_dump($tsdb->select_user($query));
?>