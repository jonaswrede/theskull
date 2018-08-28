<?php
session_start();

if(!$_SESSION["login"])
{
    header("location: login_page.php");
}
?>



<html>
    <head>
        <style>
            #tsa{
                display: none;
            }
        </style>
    </head>

        <body>
        <?php

        if($_SESSION["usrgrp"]=="tsa"){
            echo "Hello Admin";

        echo "<script>
                    document.getElementById('tsa').style.display=inline;
                    
                    alert(document.getElementById('tsa').style);
              </script>
                ";
        }

        ?>
            <form method ="POST" action="kill_session.php">
                  <input type="SUBMIT" value="Logout" name="loggout">
            </form>

        <div id="tsa">
          <br>  Only visible for admins!
        </div>

        </body>
</html>
