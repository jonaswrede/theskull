<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 03.09.18
 * Time: 18:16
 */


/**
 * @param $action string
 * @param $id integer
 * @param $user string
 * @param $status string
 *
 *
 * $file -> Login & Logout Logs sollen beide ins login_log.txt file geschrieben werden.
 *          Da die der Dateipfad auf der Action basiert, muss abegrafgt werden ob action=logout ist. Wenn
 *          dies der Fall ist, wird $file auf Login gesetzt.
 *
 */
function create_log($action,$id,$user,$status){
    if($action == "logout"){
        $file = "login";
    }
    else{
        $file = $action;
    }
    $time = date('m/d/Y h:i:s a', time());
    $path = "../web_logs/".$file."_log.txt";
    $ip = $_SERVER["REMOTE_ADDR"];
    $log = "\n".$time.";".$id.";".$user.";".$status.";".$ip;
    file_put_contents($path,$log, FILE_APPEND);
}
