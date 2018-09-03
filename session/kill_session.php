<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 23.08.18
 * Time: 17:22
 */
session_start();
session_destroy();

header("location: index.php");

