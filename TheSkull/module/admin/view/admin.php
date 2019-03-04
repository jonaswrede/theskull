<?php
session_start();

if($_SESSION["login"]!= true && $_SESSION['usrgrp']=='TSA')
{

    header("location: ../../login/view/login_page.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../ext/bootstrap.min.css">
    <script src="../../ext/jquery-3.2.1.slim.min.js"></script>
    <script src="../../ext/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta name="description" content="Information about TheSkull">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
</head>
<body>
<div>
    <?php
    include "../../../template/menu.php";
    ?>
</div>
<div class="container mt-2">
    <div class="text-center">
        <form method="post" action="admin.php">
            <div class="row">
                <div class="col">
                    Username
                </div>
                <div class="col">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    PW
                </div>
                <div class="col">
                    <input type="text" name="pw">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    E-Mail
                </div>
                <div class="col">
                    <input type="text" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" name="submit">
                </div>

            </div>
        </form>
    </div>

<?php
    if (isset($_POST['submit'])){
        include $_SERVER["DOCUMENT_ROOT"]."/adapter/TSDb.php";
        include $_SERVER["DOCUMENT_ROOT"]."/adapter/local.php";
        echo "post<br>";
        $db = new TSDb($a);
        $db->create_user($_POST["name"],$_POST["pw"],$_POST["email"]);
        echo "<br>";

    }

?>

</body>
</html>