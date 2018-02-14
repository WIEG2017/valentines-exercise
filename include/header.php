<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                <li><a href="">Om Valentines day</a></li>
                <li><a href="singelsidan.php">Singel-sidan</a></li>
                <li><a href="">Kontakt</a></li>
                <li><a href="">Om oss</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Spara favoriter</a>
                    <div class="dropdown-content">
                        <div class="layer">
                            <form action="" method="post" id="favoritesList">
                                <input type="checkbox" name="gifts">Present-tips</input></br>
                                <input type="checkbox" name="movies">Film-tips</input></br>
                                <input type="checkbox" name="restaurants">Restaurang-tips</input></br>
                                <input type="checkbox" name="candies">Godis-tips</input></br>
                                <input type="checkbox" name="aboutValentines">Om Valentines day</input></br>
                                <input type="checkbox" name="Singel">Singel-sidan</input></br>
                                <input type="checkbox" name="contact">Kontakt</input></br>
                                <input type="checkbox" name="aboutUs">Om oss</input></br>
                                <button type="submit">Spara</button>
                            </form>
                        </div>
                    </div>
                </li>
        </div>
    </div>

    <div id = "content">
