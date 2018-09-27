<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 22.08.18
 * Time: 16:20
 */


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
            /**  border: 5px solid gray;*/


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
<body STYLE="background-color: black">

<div class="container-fluid">
    <div class="row-fluid">
        <!-- <span class="border border border-dark">-->
        <div class="centering text-center">
            <div class="container border border-dark mw-75">
                <img src="../../../bullet_idea.jpeg" height="80px" width="80px" hspace="20" class="rounded-circle p-2" style="margin-top: 10px">
                <!-- Default form login -->
                <form class="text-center p-5" action="../action/verify.php" method="post">
                    <p class="h4 mb-4">Sign in</p>
                    <!-- Email -->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="username" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>>
                    <button class="btn btn-secondary m-5" type="submit">Sign in</button>

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



