<?php 
session_start(); 
$title = 'Valentine';
include 'include/loginfunction.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/6b6b3eeb71.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title><?php $title ?></title>
</head>
<body>
    <div class="header">
        <div class="valentine">V A L E N T I N E</div>
            <div class="cart_menu">
                <div class="menu">
                    <a href="index.php" class="link">Start</a>
                    <!-- <a href="array.php"class="link">Array</a> -->
                    <a href="#"class="link">Pension</a>
                    <a href="blomma.php"class="link">Blommor</a>
                    <a href="choklad.php"class="link">Choklad</a>
                    <a href="#"class="link">Kontakt</a>
                    <a href="#"class="link">Om oss</a>
                </div>
                <div class="cart"><a href="kassa.php"><i class="fa fa-shopping-cart fa-2x"></i></a></div>
                <?php if($_SESSION['email']){
                    echo "du är inloggad!";
                    echo "<form  action='".$_SERVER["PHP_SELF"]."' method='post'>";
                    echo "<input type='hidden' name='delete' value='true' >";
                    echo "<input type='submit' value='Logout'>";
                    echo "</form>";} ?>
                <div class="fav_form">
                    <div class="fav_item">
                        <div class="row">
                            <div class="check_item">Start</div><input type="checkbox" name="start" class="checkbox">
                            <div class="check_item">Array</div><input type="checkbox" name="array" class="checkbox">
                        </div>
                        <div class="row">
                            <div class="check_item">Pension</div><input type="checkbox" name="pension" class="checkbox">
                            <div class="check_item">Blommor</div><input type="checkbox" name="blommor" class="checkbox">
                        </div>
                        <div class="row">
                            <div class="check_item">Choklad</div><input type="checkbox" name="choklad" class="checkbox">
                            <div class="check_item">Kontakt</div><input type="checkbox" name="Kontakt" class="checkbox">
                        </div>
                        <!-- <div class="row">
                           <div class="check_item">Om oss</div><input type="checkbox" name="Om oss"></div>-->
                            
                        
                    </div>
                    <input type="submit" name="submit" value="Spara" class="save">
                </div>
        </div>
    </div>
    
</body>
</html>