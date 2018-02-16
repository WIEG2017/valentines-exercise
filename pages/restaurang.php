<?php
     session_start();    
     include 'include/header.php';
     include 'include/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurang tips</title>

<style>
    img{
    width: 350px;
    height: 250px;
    border-radius: 20px;
    box-shadow: 8px 8px 10px #aaa;
    margin: 20px;
    flex-direction: column;
}

h1{
    color: pink;
}
</style>

</head>
<body>

<h1>Hitta den perfekta restaurangen att fira alla ❤️ dag på</h1>


    
<?php 
echo '<a href="http://ottomania.se/?utm_source=thatsup&utm_medium=referral"><img src="/img/ottomania-3.jpg" /></a>';
echo '<a href="http://restaurangmeet.se/wordpress/home/"><img src="/img/restaurang-meet-3.jpg" /></a>';
echo '<a href="http://www.rumi.se/?utm_source=thatsup&utm_medium=referral"><img src="/img/rumi-persian-cuisine-1.jpg" /></a>';
echo '<a href="http://www.dorsia.se/?utm_source=thatsup&utm_medium=referral"><img src="/img/Dorsia_01-LARGE.jpg" /></a>';
?>

<div class="wrapper">

<div class="content">

<h2>Ottomania</h2>
<p>I Vasastan i Göteborg ligger Ottomania - Turkiskt kök, 
bar och lounge med mat och mottagande från Turkiets hjärta.
I den vackra restaurangen inspirerad av sultanpalatset i 
Istanbul kan du njuta av av en god middag, 
viner och cocktails med utsikt över Vasakyrkan och Vasaparken.</p>

<h2>Meet</h2>
<p>Meets adelsmärke är enkelheten. Här låter man råvaran spela huvudrollen.
Meets affärsidé, att låta sina gäster välja mellan tillbehör som handgjorda 
pommesstrips, såser till sitt eget utvalda kött som grillas till perfektion i köket.</p>

<h2>Rumi</h2>
<p>På Rumi går vägen till hjärtat via magen och Irans alla hörn.
Vi tar dig med på en smakresa lika kärleksfull som en dikt från Rumi själv där maze, 
varmrätt och efterrätt är ord som tillsammans skapar en mättande och kärleksfull prosa.
En dikt vi kallar persiska köket.</p>

<h2>Dorsia</h2>
<p>VÄLKOMMEN IN TILL VÅR VACKRA MATSAL FULL AV FÄRG OCH LEVANDE LJUS. 
EN DEKADENT OCH OFÖRGLÖMLIG UPPLEVELSE MED LJUVLIGA SMAKER INSPIRERADE AV DET FRANSKA KÖKET. 
VÅR AMBITION ÄR ATT SERVERA DEN BÄSTA MATEN, DET BÄSTA VINET OCH GE DEN ABSOLUT BÄSTA SERVICEN.</p>

</div>
</div>




<?php
     include 'include/footer.php';
?>