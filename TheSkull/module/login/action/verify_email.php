<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 04.03.2019
 * Time: 13:59
 */

include $_SERVER["DOCUMENT_ROOT"]."/adapter/TSDb.php";

include $_SERVER["DOCUMENT_ROOT"]."/adapter/local.php";

if(isset($_GET["u"])){
    $db = new TSDb($a);
    $verify = $db->verify_user($_GET["u"]);

    echo $verify ==true?'verfied':'error';

    echo"<input type='button' onclick='' name='weiter' value='weiter'>";
}