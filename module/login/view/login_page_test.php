<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 27.09.18
 * Time: 09:47
 */




?>

<html>

    <body>

        <!-- Default form login -->
        <form class="text-center border border-light p-5" action="../action/verify.php" method="post">

            <p class="h4 mb-4">Sign in</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" name="username" class="form-control mb-4" placeholder="E-mail">

            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" name="pass" class="form-control mb-4" placeholder="Password">

            <div class="d-flex justify-content-around">
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

            <!-- Register -->
            <p>Not a member?
                <a href="">Register</a>
            </p>

        </form>
        <!-- Default form login -->
    </body>
</html>
