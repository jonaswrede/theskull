<?php
    session_start();

    $_SESSION["logged"] = "yes";

    if(!$_SESSION["time"])
    {
        $time = date('m/d/Y h:i:s a', time());
        $_SESSION["time"] = (string)$time;
    }


    if($_SESSION["name"]=="jonas")
    {
        $_SESSION["admin"]="true";
    }
    var_dump($_SESSION["logged"]);

    if(!$_SESSION['logged']=="yes")
    {
        header("Location: login_page.php");
        exit;
    }
$host_name = 'db748804796.db.1and1.com';
$database = 'db748804796';
$user_name = 'dbo748804796';
$password = 'Tml321Bmg()=';
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    die('<p>Verbindung zum MySQL Server fehlgeschlagen: '.mysqli_connect_error().'</p>');
} else {
    echo '<p>Verbindung zum MySQL Server erfolgreich aufgebaut.</p >';
}

    $pass = "Toshibalol80";
    $hash= '$1$QNiYVT2j$IQJ2wLmFZku/E5QC1LNJa/';
    echo $pass;
    echo "<br>". $hash;

    if(password_verify($pass,$hash))
    {
        echo "verify works";
    }
    else
    {
        echo "verify does not work";
    }

    ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!--  <meta http-equiv="Refresh" content="0;url=defaultsite" />
-->  <!-- DE -->
</head>
<body>

<h1><div style="text-align: center;"> THE SKULL  </div></h1>
<H2>version 0.2</h2>
<form action="session_info.php" method="post">
    <input type="input" name="name" value="name">
    <input type="submit" name="login" value="Login">
</form>
<form action="admin.php" method="post">
    <input type="input" name="name" value="name">
    <input type="submit" name="login" value="Admin">
</form>

<?php
    echo 'Welcome, '.$_SESSION['name']."<br><br>";

    $handle = fopen("counter.txt", "r");
    $counter = intval(fgets($handle))+1;
    fclose($handle);

    $handle = fopen("counter.txt", "w");
    fputs($handle,(string)$counter);
    fclose($handle);

    echo $counter;

    ?>
</body>
</html>
