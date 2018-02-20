<?php
// Skriv alla funktioner här :D


$logins = array(
    array("Martin Myrmarker", "martin@mail.se", 1234),
    array("Anton Petersson", "anton@mail.se", 1234),
    array("Louise", "louise@mail.se", 1234),
    array("André", "andre@mail.se", 1234)
);




function login($logins){
    
    if(isset($_POST['login'])){
        for( $i = 0; $i < count($logins); $i++){
            
            
            if( $_POST["user"] == $logins[$i][1] and  $_POST["password"] == $logins[$i][2]){
                $_SESSION["loginSingel"] = true;
                $_SESSION["hellouser"] = $logins[$i][0];
                $_SESSION["userLoggedIn"] = true;
            
                header("location: singelsidan.php");
                die();
            }
        }  
    }  
}

