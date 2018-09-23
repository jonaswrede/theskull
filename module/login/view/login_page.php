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
            .vertical-center {
                min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
                min-height: 100vh; /* These two lines are counted as one :-)       */

                display: flex;
                align-items: center;
            }
        </style>

        <title>
            Login
        </title>
    </head>
    <body>
        <div class="jumbotron vertical-center">
            <div class="container">
                <form action="../action/verify.php"  method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="Submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </body>
</html>



