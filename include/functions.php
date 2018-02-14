<?php
// Skriv alla funktioner här :D


$logins = array(
    array("Martin Myrmarker", "martin@mail.se", 1234)
);


function login($logins){
    $username = "user";
    $password = "password";
    if( $_GET["user"] == $logins[0][1] and  $_GET["password"] == $logins[0][2] ){
        echo "<script type='text/javascript'>alert('Välkommen $logins[0][0]');</script>";

    }
}