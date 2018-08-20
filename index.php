<?php
    session_start();

    $_SESSION["logged"] = "yes";
    if(!$_SESSION['logged']=="yes")
    {
        header("Location: login_page.php");
        exit;
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
<H2>version 0.1</h2>
    
<?php
    echo 'Welcome, '.$_SESSION['username']."<br><br>";

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
