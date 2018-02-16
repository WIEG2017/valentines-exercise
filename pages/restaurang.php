<?php
    // session_start();    
    // include 'include/header.php';
    // include 'include/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Kavivanar" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurang tips</title>

<style>

 #main{
    display: -webkit-flex;
           display: flex;
           -webkit-flex-direction: row;
           flex-direction: row;
           -webkit-align-items: center;
           align-items: center;

           flex-wrap: wrap;
           min-width: 320px;
           max-width: 1220px;
}

.rest1{
    
        height: 120px;
        width: 300px;
        background-color: #e46119;
        border: 1px solid #626262;
        margin: 3px;
        padding: 10px 0 0 10px;
}
span {
            padding-left: 5px;
        }

    img{
    width: 350px;
    height: 250px;
    border-radius: 20px;
    box-shadow: 8px 8px 10px #aaa;
    margin: 20px;
    
}

h1{
    color: pink;
    font-family: 'Kavivanar', cursive;
}

h2{
    font-family: 'Kavivanar', cursive;
}

p{
    font-family: 'Bitter', serif;
    margin: 15px;
} 

</style>

</head>
<body>

<h1>Hitta den perfekta restaurangen att fira alla❤️dag på</h1>

<div id="main">
    <div class="rest">    
    <?php 
    echo '<a href="http://ottomania.se/?utm_source=thatsup&utm_medium=referral"><img src="/img/ottomania-3.jpg" /></a>';
    ?><h2>Ottomania</h2>
    <span><p>I Vasastan i Göteborg ligger Ottomania - Turkiskt kök,<br>
    bar och lounge med mat och mottagande från Turkiets hjärta.<br>
    I den vackra restaurangen inspirerad av sultanpalatset i<br>
    Istanbul kan du njuta av av en god middag,<br>
    viner och cocktails med utsikt över Vasakyrkan och Vasaparken.</p></span>
    </div>
    <div class="rest">
    <?php
    echo '<a href="http://restaurangmeet.se/wordpress/home/"><img src="/img/restaurang-meet-3.jpg" /></a>';
    ?><h2>Meet</h2>
    <span><p>Meets adelsmärke är enkelheten. Här låter man råvaran<br>
    spela huvudrollen. Meets affärsidé, att låta sina gäster<br>
    välja mellan tillbehör som handgjorda pommesstrips, såser<br>
    till sitt eget utvalda kött som grillas till perfektion i köket.</p></span>
    </div>
    <div class="rest">
    <?php
    echo '<a href="http://www.rumi.se/?utm_source=thatsup&utm_medium=referral"><img src="/img/rumi-persian-cuisine-1.jpg" /></a>';
    ?><h2>Rumi</h2>
    <span><p>På Rumi går vägen till hjärtat via magen och Irans alla hörn.<br>
    Vi tar dig med på en smakresa lika kärleksfull som en dikt från<br> 
    Rumi själv där maze, varmrätt och efterrätt är ord<br> 
    som tillsammans skapar en mättande och kärleksfull prosa.<br>
    En dikt vi kallar persiska köket.</p></span>
    </div>
    <div class="rest">
    <?php
    echo '<a href="http://www.dorsia.se/?utm_source=thatsup&utm_medium=referral"><img src="/img/Dorsia_01-LARGE.jpg" /></a>';
    ?><h2>Dorsia</h2>
    <span><p>VÄLKOMMEN IN TILL VÅR VACKRA MATSAL FULL AV FÄRG<br> 
    OCH LEVANDE LJUS. EN DEKADENT OCH OFÖRGLÖMLIG UPPLEVELSE MED<br>
    LJUVLIGA SMAKER INSPIRERADE AV DET FRANSKA KÖKET. VÅR AMBITION<br> 
    ÄR ATT SERVERA DEN BÄSTA MATEN, DET BÄSTA VINET OCH GE DEN<br> 
    ABSOLUT BÄSTA SERVICEN.</p></span>
    </div>

</div>




<?php
    // include 'include/footer.php';
?>