<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 22.08.18
 * Time: 16:20
 */

session_start();


if($_SESSION["login"]){
    header('Location: /index.php');
}
?>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>

            html, body{height:100%; margin:0;padding:0}

            .container-fluid{
                height:100%;
                display:table;
                width: 100%;
                padding: 0;
                border: black;
            }

            .row-fluid {height: 100%; display:table-cell; vertical-align: middle;}



            .centering {
                float:none;
                margin:0 auto;
            }
        </style>

        <title>
            Login
        </title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="centering text-center">
                    <form action="../action/verify.php"  method="post">
                        <input type="text" name="username" placeholder="Username" required><br>    <br>
                        <input type="password" name="pass" placeholder="Password" required><br>
                        <input type="Submit" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>



