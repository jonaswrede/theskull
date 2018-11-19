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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="../../ext/open-iconic-master/font/css/open-iconic-bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
           .container-make-table{
                height:100%;
                display:table!important;
            }

            .row-fluid{
                height: 100%;
                display:table-cell;
                vertical-align: middle;
                margin-left: -15px;
                margin-right: -15px;
            }

            @media (max-width: 450px) {
                .container {
                    padding-right: 0;
                    padding-left: 0;
                }
            }
        </style>

        <title>
            Login
        </title>
    </head>
    <body>
        <div class="container container-make-table">
            <div class="row row-fluid">
                <div class="col">
                    <div class="container text-center">
                        <div class="container">
                            <img src="../../../theskull.png" alt="">
                        </div>
                        <div class="container border border-dark" style="max-width:75% ">
                            <div class="row">
                                <div class="col">
                                    <img src="../../../bullet_idea.jpeg" alt="" height="80px" width="80px" hspace="20" class="rounded-circle p-2 mt-2">
                                </div>
                            </div>
                            <form role="form" class="p-2 needs-validation" action="../action/verify.php" method="post" data-toggle="validator" novalidate>
                                <div class="row">
                                    <div class="col">
                                        <p class="h4 mb-4">Sign in</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text pr-3" id="btnGroupAddon2"><i class="oi oi-person" style="width: 10px"></i></div>
                                                </div>
                                                <input class="form-control py-2 border" type="text" name="username" placeholder="Username" required>
                                                <div class="invalid-feedback">
                                                    Username required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text pr-3" id="btnGroupAddon2"><i class="oi oi-lock-locked" style="width:10px"></i></div>
                                                </div>
                                                <input class="form-control py-2 border" type="password" name="pass" placeholder="Password" required>
                                                <div class="invalid-feedback">
                                                    Password required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary mb-2" name="login" type="submit">Sign in</button>
                                <p>Not a member? <a href="">Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>
</html>