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
            <ul>
                <li><a href="index.php">Start</a></li>
                <li><a href="produkter.php">Produkter</a></li>
                <li><a href="about.php">Om Oss</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="signup.php">Skapa Konto</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Medlemssida</a></li>
                <li><a href="#">Kundvagn<?php
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
                    echo "<button type='submit'>Favourite this page</button>";
                    echo "</form>";
                }
            ?>
        </header>


