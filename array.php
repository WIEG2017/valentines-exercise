<?php
    session_start(); 
    include 'include/header.php';
    include 'include/loginfunction.php';
    include 'include/data.php';
    if($_SESSION['email']){
      foreach($listOfEachFlower as $key=>$array){
        echo "<div>";
        echo "<h1>$array[name]</h1>";
        echo "<img src=".$array["image"].">";
        echo "<p>$array[description]</p>";
        echo "<h2>$array[price] kr</h2>";
        echo "</div>";
      }
    }else{
      include 'include/login.php'; 
    }


?>