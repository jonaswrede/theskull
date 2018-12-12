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
        <link rel="stylesheet" href="../../ext/open-iconic-master/font/css/open-iconic-bootstrap.css">
        <link rel="stylesheet" href="../../ext/bootstrap.min.css">

        <!-- Latest compiled and minified CSS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
        <meta name="description" content="The Skull - Login Page - TheSkull.de">
       <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->

        <script>

            function showHint() {

                // language=JQuery-CSS
                $('#wrong-cred').hide();
                event.preventDefault();
                console.log ("function triggerd");
             //   document.getElementById("txtHint").innerHTML = "";

                var username = document.getElementById("username").value;
                var pw = document.getElementById("pw").value;

                console.log("user:"+username);
                console.log("pw:"+pw);

                if (username.length === 0 || pw.length === 0) {
                    console.log("length invalid");
                    //document.getElementById("txtHint").innerHTML = "Length invalid - Request not post";
                    return;
                } else {
                    console.log("create xmlhttp");
                    var xmlhttp = new XMLHttpRequest();
                    console.log (xmlhttp);
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                            console.log("request status:"+xmlhttp.status)
                            console.log(xmlhttp.response);
                            var response = "not set now";
                            if (xmlhttp.response ==="Success"){
                                response = "success";
                                window.location.href="../../main/view/index.php"
                            }
                            if (xmlhttp.response ==="PW ERROR"){
                                $("#wrong-cred").show();
                                response = "PW ERROR";
                            }
                            if (xmlhttp.response ==="USER ERROR"){
                                $("#wrong-cred").show();

                                response = "USER ERROR";
                            }
                            if (xmlhttp.response ==="VAR ERROR"){

                                response = "Session already exist";
                            }

                            //document.getElementById("txtHint").innerHTML = response;
                        }
                    };


                    xmlhttp.open("POST", "../action/ajax_verify.php", true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send("username="+username+"&pass="+pw+"&ajax=true");
                    console.log(xmlhttp);
                }
            }
        </script>

        <style>
            body,main {
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0px;
                bottom: 0px;
            }
           .container-make-table{
               height: 100% !important;
                display:table!important;
            }

            .row-fluid{
                height: 100%!important;
                display:table-cell!important;
                vertical-align: middle!important;
                margin-left: -15px!important;
                margin-right: -15px!important;
            }

            .register{
                color: #024fa0;
            }

            .bi_pic{
                height:80px;
                width: 80px;
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
    <header></header>
    <main>
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
                                    <img src="../../../bullet_idea.jpeg" alt="" class="rounded-circle bi_pic p-2 mt-2">
                                </div>
                            </div>
                            <form class="p-2 needs-validation" action="../action/ajax_verify.php" onsubmit="showHint()" method="post" data-toggle="validator" novalidate>
                                <div class="row">
                                    <div class="col">
                                        <p class="h4 mb-4">Sign in</p>
                                    </div>
                                </div>
                                <div>

                                    <div class="alert alert-danger" id="wrong-cred" style="display: none" role="alert">
                                        Credentials not correct!
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text pr-3" id="btnGroupAddon"><i class="oi oi-person" style="width: 10px"></i></div>
                                                </div>
                                                <input class="form-control py-2 border" id="username" type="text" name="username" placeholder="Username" aria-label="Username" required>
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
                                                    <div class="input-group-text pr-3" id="btnGroupAddon1"><i class="oi oi-lock-locked" style="width:10px"></i></div>
                                                </div>
                                                <input class="form-control py-2 border current-password" id="pw" type="password" name="pass" placeholder="Password" aria-label="Password" required>
                                                <div class="invalid-feedback">
                                                    Password required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary mb-2" name="login" type="submit">Sign in</button>
                                <p>Not a member? <a class="register" href="">Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>
