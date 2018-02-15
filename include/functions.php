<?php
// Skriv alla funktioner här :D


$logins = array(
    array("Martin Myrmarker", "martin@mail.se", 1234),
    array("Anton Petersson", "anton@mail.se", 1234),
    array("Louise", "louise@mail.se", 1234),
    array("André", "Andre", 1234)
);


function login($logins){
    

    for( $i = 0; $i < count($logins); $i++){
        //$hello = $logins[$i][0];
        $ipAdress = $_SERVER['REMOTE_ADDR'];
        $_SESSION["hello"] = $logins[$i][0];
        $_SESSION["ip"] = $ipAdress;
        
        if( $_POST["user"] == $logins[$i][1] and  $_POST["password"] == $logins[$i][2] ){
            $_SESSION["loginSingel"] = true;
            header("location: singelsidan.php");
   
        }
    }    
}


