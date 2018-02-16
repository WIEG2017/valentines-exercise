<?php
// Skriv alla funktioner här :D


$logins = array(
    array("Martin Myrmarker", "martin@mail.se", 1234),
    array("Anton Petersson", "anton@mail.se", 1234),
    array("Louise", "louise@mail.se", 1234),
    array("André", "Andre", 1234)
);

function writeLogin($logins){
    for( $i = 0; $i < count($logins); $i++){
        if( $_POST["user"] == $logins[$i][1] and  $_POST["password"] == $logins[$i][2] ){
         
   
        
        $hello = $logins[$i][0];
        $ip = $_SERVER['REMOTE_ADDR'];
        echo "<script type='text/javascript'>alert('Välkommen $hello');</script>";
      

        }
    }
}

function login($logins){
    

    for( $i = 0; $i < count($logins); $i++){
         
        
        if( $_POST["user"] == $logins[$i][1] and  $_POST["password"] == $logins[$i][2] ){
            $hello = $logins[$i][0];
            $_SESSION["loginSingel"] = true;
            $_SESSION["hellouser"] = $hello;
           
            header("location: singelsidan.php");
   
        }
    }    
}


