<?php
    if(!isset($mainLoaded))
    {
        require "incl/main.php";
    }
    $mainLoaded = true;
    session_start();
    $theCart = new Cart();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Valentines Day Shop ❣️ <?php if(isset($page_title)) { echo $page_title; } ?></title>
    </head>
    <body>
        <header>
            <ul style="opacity: 1; color: white; background: url('images/black.jpeg')fixed;">
                <li><a href="index.php">Start</a></li>
                <li><a href="produkter.php">Produkter</a></li>
                <li><a href="about.php">Om Oss</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="signup.php">Skapa Konto</a></li>
                <?php
                if(isset($_SESSION['CID'])){
                    echo "<form method='GET'><input class='buttonLogout' type='submit' name='loggaUt' value='Logga ut'/></form>";
                if(isset($_GET['loggaUt'])) {
                        unset($_SESSION['CID']);
                        header('Location: ./index.php');
                    }
                //echo "<li style='float:right; width: 10%;'><a class='active' href='login.php'>Logga ut</a></li>";
                } else {
                    echo "<li style='float:right; width: 10%;'><a class='active' href='login.php'>Logga in</a></li>";
                }
                ?>
                <li><a href="#">Medlemssida</a></li>
                <li><a href="kundvagn.php">Kundvagn<?php
                    $temp = $theCart->getQuantities();
                    if($temp) echo " ($temp)"; unset($temp);
                 ?></a></li>
            </ul>
            <?php
                if(isset($page_title))
                {
                    echo "<form method='POST' action='newfav.php'>";
                    $currentURL = $_SERVER['REQUEST_URI'];
                    if($currentURL == "/")
                    {
                        $currentURL = "/index.php";
                    }
                    echo "<input type='hidden' name='pagename' value='$page_title'>";
                    echo "<input type='hidden' name='pageurl' value='$currentURL'>";
                    echo "<button class='favorit' type='submit'>Favourite this page</button>";
                    echo "</form>";
                }
            ?>
        </header>


