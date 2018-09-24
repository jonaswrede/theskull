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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>

            html, body{height:100%; margin:0;padding:0}

                .container-fluid{
                height:100%;
                display:table;
                width: 100%;
                padding: 0;
                    border: 5px solid gray;


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
    <span class="border border border-dark">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="centering text-center">
                    <img src="../../../bullet_idea.jpeg" height="75px" width="75px" hspace="20" class="rounded-circle">>
                     <p><span style="font-size: 12pt;"><br /></span></p>
                    <form action="../action/verify.php"  method="post">
                        <input type="text" name="username" placeholder="Username" required><br>    <br>
                        <input type="password" name="pass" placeholder="Password" required><br> <br>
                        <input type="Submit" name="login" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </span>
    </body>
</html>



