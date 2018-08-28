<?php
session_start();

if(!$_SESSION["login"])
{
    header("location: login_page.php");
}
?>


<html>
    <body>
    <?php

    if($_SESSION["usrgrp"]=="tsa"){
        echo "Hello Admin";
    }

    ?>
        <form method ="POST" action="kill_session.php">
              <input type="SUBMIT" value="Logout" name="loggout">
        </form>
    </body>
</html>
