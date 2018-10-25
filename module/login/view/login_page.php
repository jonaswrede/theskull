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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../ext/open-iconic-master/font/css/open-iconic-bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            .-fluid
        </style>
        <title>
            Login
        </title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="background-color: red">
                <div class="col">
                    <div class="container text-center">
                        <img src="../../../theskull.png">
                    </div>
                </div>
            </div>
            <div class="row" style="background-color: blue">
                <div class="col">
                    <div class="container border border-dark" style=" width:200px; height:100px "><!--   <img src="../../../bullet_idea.jpeg" height="80px" width="80px" hspace="20" class="rounded-circle p-2" style="margin-top: 10px">
                           <!-- Default form login -->
                        <form class="text-center p-2" action="../action/verify.php" method="post">
                            <p class="h4 mb-4 mt-4">Sign in</p>
                            <!-- Email -->
                            <div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text pr-3" id="btnGroupAddon2"><i class="oi oi-person" style="width: 10px"></i></div>
                                    </div>
                                    <input class="form-control py-2 border" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text pr-3" id="btnGroupAddon2"><i class="oi oi-lock-locked" style="width:10px"></i></div>
                                    </div>
                                    <input class="form-control py-2 border" type="password" name="pass" placeholder="Password"></div>

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
            <div class="row" style="background-color: green">
                <div class="col">
                </div>
            </div>
        </div>
    </body>
</html>



