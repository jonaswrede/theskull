<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 22.08.18
 * Time: 16:20
 */
session_start();
if($_SESSION["login"]){
    header('Location: ../../main/view/index.php');
}
?><!DOCTYPE HTML>
<html lang="EN">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
           .container-make-table{
                height:100%!important;
                display:table!important;
            }
            .row-fluid{
                height: 100%!important;
                display:table-cell!important;
                vertical-align: middle!important;
                margin-left: -15px;
                margin-right: -15px;
            }

        </style>
        <title>
            Test
        </title>
    </head>
    <body style="position:absolute;top:0px;left:0px;right:0px;bottom:0px;">
        <div class="container container-make-table">
            <div class="row-fluid">
                <div class="col">
                    <div class="container text-center">
                        <div class="container border border-dark" style="max-width:75% ">
                            Test
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
