<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600" rel="stylesheet"> 
    <title>Valentines Day</title>
</head>
<body>
    <div id = "header">
        <div id="logo">
        <h1>Valentines</h1>
        </div>
        <div id="menu">
            <ul id="menuUL">
                <li><a href="">Start</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Valentines-tips</a>
                    <div class="dropdown-content">
                        <div class="layer">
                            <a href="#">Present-tips</a>
                            <a href="#">Film-tips</a>
                            <a href="#">Restaurang-tips</a>
                            <a href="#">Godis-tips</a>
                        </div>
                    </div>
                </li>
                <li><a href="../pages/WhatisValDay.php">Om Valentines day</a></li>
                <li><a href="../pages/singelsidanlogin.php">Singel-sidan</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="">Om oss</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Spara favoriter</a>
                    <div class="dropdown-content">
                        <div class="layer">
                            <form action="" method="post" id="favoritesList">
                                <input type="checkbox" name="checkFavorites[]" value="Present-tips">Present-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Film-tips">Film-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Restaurang-tips">Restaurang-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Godis-tips">Godis-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Om Valentines day">Om Valentines day</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Singel-sidan">Singel-sidan</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Kontakt">Kontakt</input></br>
                                <input type="checkbox" name="checkFavorites[]" value="Om oss">Om oss</input></br>
                                <input type="submit" name="submit" Value="Spara"/>
                            </form>
                        </div>
                    </div>
                </li>
        </div>
    </div>

    <div id = "content">
