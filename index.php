<?php
session_start();

if(!$_SESSION["login"])
{
    header("location: login_page.php");
}
?>


<html>
    <body>
        <form method ="POST" action="kill_session.php"
              <input type="SUBMIT" value="Logout" name="loggout">
        </form>
    </body>
</html>
