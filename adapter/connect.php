<?php

function get_connection(){
    $host_name = 'db748804796.db.1and1.com';
    $database = 'db748804796';
    $user_name = 'dbo748804796';
    $password = 'Tml321Bmg()=';
    $connect = new mysqli($host_name, $user_name, $password, $database);

    return $connect;
}