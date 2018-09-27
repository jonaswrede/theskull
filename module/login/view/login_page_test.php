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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<body>

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
                        <input id="email" type="text" class="form-control m-4" name="username" placeholder="Username">
                    </div>
                    <div class="input-group p-5">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control m-4" name="password" placeholder="Password">
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



