<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 03.09.18
 * Time: 18:16
 */

function create_log($action/**,$user,$status**/){
    $time = date('m/d/Y h:i:s a', time());
    $path = "weblogs/".$action."_log.txt";


    $handle = file_get_contents($path, true);

    echo $path."<br>";

    echo $time." ".$handle;


}




?>

