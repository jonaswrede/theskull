<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 03.09.18
 * Time: 18:16
 */
session_start();
function create_log($action,$id,$user,$status){
    $time = date('m/d/Y h:i:s a', time());
    $path = "web_logs/".$action."_log.txt";
    $ip = $_SERVER["REMOTE_ADDR"];
    $log = "\n".$time.";".$id.";".$user.";".$status.";".$ip;
    $_SESSION["LOG"] = var_dump(file_put_contents($path,$log, FILE_APPEND));




}
