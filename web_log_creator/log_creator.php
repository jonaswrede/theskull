<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 03.09.18
 * Time: 18:16
 */

function create_log($action,$user,$status){
    $time = date('m/d/Y h:i:s a', time());
    $path = "web_logs/".$action."_log.txt";
    $log = $time."\t".$user."\t".$status;

    var_dump(file_put_contents($path,$log,true, FILE_APPEND));

    $handle1 = file_get_contents($path,true);

    echo $path."<br>";


    echo $handle1."\t\t\t";


}




?>
