<?php
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
?>