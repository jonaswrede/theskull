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

  <!--<style>

        html, body{height:100%; margin:0;padding:0}

        .container-fluid{
            height:100%;
            display:table;
            width: 100%;
            padding: 0;
            /**  border: 5px solid gray;*/


        }

        .row-fluid {height: 100%; display:table-cell; vertical-align: middle;}

        .centering {
            float:none;
            margin:0 auto;
        }
    </style> -->

    <title>
        Login
    </title>
</head>
<body style="background-color: black">

<div class="container-fluid">
    <div class="row-fluid">
        <!-- <span class="border border border-dark">-->
        <div class="centering text-center">
            <div class="container">
                <img src="../../../theskull.png">
            </div>
            <div class="container border border-dark" style="background-color: black">
                <img src="../../../bullet_idea.jpeg" height="80px" width="80px" hspace="20" class="rounded-circle p-2" style="margin-top: 10px">
                <!-- Default form login -->
                <form class="text-center p-2" action="../action/verify.php" method="post">
                    <p class="h4 mb-4">Sign in</p>
                    <!-- Email -->
                    <div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text pr-3" id="btnGroupAddon2"><i class="oi oi-person" style="width: 10px"></i></div>
                            </div>
                            <input class="form-control py-2 border" type="text" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text pr-3" id="btnGroupAddon2"><i class="oi oi-lock-locked" style="width:10px"></i></div>
                            </div>
                            <input class="form-control py-2 border" type="password" name="pass" placeholder="Password">
                        </div>

                    </div>
                    <button class="btn btn-secondary mb-3" type="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                        <a href="">Register</a>
                    </p>

                </form>
                <!-- Default form login -->
            </div>
        </div>
    </div>
</div>
</body>
</html>



