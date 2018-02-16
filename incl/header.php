<?php
    session_start();
    
    if(!isset($mainLoaded))
    {
        require "incl/main.php";
    }
    $mainLoaded = true;
    
    $theCart = new Cart();
    
    $curURL = parse_url($_SERVER['REQUEST_URI']);    
    parse_str($curURL['query'], $query);
    $curURL = explode('/', $curURL['path']);
    $curURL = end($curURL);
    $curURL = ($curURL == 'login.php') ? $query['url'] : $curURL; unset($query['url']);
    if(count($query)) $curURL .= "?".array_keys($query)[0]."=".reset($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
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
                
                
                <li style='float:right; width: 10%;'><?php
                    if(isset($_SESSION['CID'])) echo "<a class='active' href='logout.php?url=".$curURL."'>Logga ut</a>";
                    else echo "<a class='active' href='login.php?url=".$curURL."'>Logga in</a>";                
                ?></li>
                <li><a href="medlem.php">Medlemssida</a></li>
                <li><a href="kundvagn.php">Kundvagn    
                <?php
               
                    $temp = $theCart->getQuantities();
                    if($temp) echo " ($temp)"; unset($temp);
                 ?></a></li>
            </ul>
            <?php
                if(isset($page_title))
                {
                    echo "<form method='POST' action='favFunctions.php'>";
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
            <div id='content'>


