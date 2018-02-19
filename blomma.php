<?php
    session_start(); 
    include 'include/header.php';
    include 'include/loginfunction.php';
    include 'include/data.php';
    if(!$_SESSION['shop']){
    $array = array(); 
    array_push($array,$_GET["id"]);
    $_SESSION['shop'] =$array;
    }else if($_SESSION['shop']){
        $array = $_SESSION['shop'];
        array_push($array,$_GET["id"]);
        $_SESSION['shop'] =$array;
    }

    if($_POST['email']){
        $msg = "you are logged in with this ip address : ".$_SESSION['ip']."\\n and this email : ".$_SESSION['email'].".";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    if($_SESSION['email']){
      foreach($listOfEachFlower as $key=>$array){
        echo "<div>";
        echo "<h1>$array[name]</h1>";
        echo "<img src=".$array["image"].">";
        echo "<p>$array[description]</p>";
        echo "<h2>$array[price] kr</h2>";
        echo "<form action='".$_SERVER["PHP_SELF"]."'' methood='get'>";
        echo "<input type='hidden' name='id' value=".$array["catgoryId"].">";
        echo "<input type='submit' value='shop'>";
        echo "</form>";
        echo "</div>";
      }
     
      
    }else{
      include 'include/login.php'; 
    }
?>
<?php 
include 'include/footer.php';
?>