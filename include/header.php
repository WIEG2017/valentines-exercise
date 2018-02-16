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
                    <a href="pension.php"class="link">Pension</a>
                    <a href="blomma.php"class="link">Blommor</a>
                    <a href="choklad.php"class="link">Choklad</a>
                    <a href="kontakt.php"class="link">Kontakt</a>
                    <a href="omoss.php"class="link">Om oss</a>
                    <a href="kassa.php"><i class="fa fa-shopping-cart fa-2x"></i></a>
                </div>
                <?php if($_SESSION['email']){                    
                    echo "<form  action='".$_SERVER["PHP_SELF"]."' method='post'>";
                    echo "<input type='hidden' name='delete' value='true' >";
                    echo "du är inloggad! "." ";
                    echo "<input type='submit' style='background-color: rgb(207, 41, 55);color: white;border:none;width: 80px;height: 20px;' value='Logout'>";
                    echo "</form>";} ?>
            <form method="post"  action="<?php echo $_SERVER["PHP_SELF"];?>">     
                <div class="fav_form">
                    <div class="fav_item">
                        <div class="row">
                            <div class="check_item">Start</div><input type="checkbox" name="check1" value="index" class="checkbox">
                            <div class="check_item">Om oss</div><input type="checkbox" name="check2" value="omoss" class="checkbox">
                        </div>
                        <div class="row">
                            <div class="check_item">Pension</div><input type="checkbox" name="check3" value="pension" class="checkbox">
                            <div class="check_item">Blommor</div><input type="checkbox" name="check4" value="blomma" class="checkbox">
                        </div>
                        <div class="row">
                            <div class="check_item">Choklad</div><input type="checkbox" name="check5" value="choklad" class="checkbox">
                            <div class="check_item">Kontakt</div><input type="checkbox" name="check6" value="kontakt" class="checkbox">
                        </div>
                        <!-- <div class="row">
                           <div class="check_item">Om oss</div><input type="checkbox" name="Om oss"></div>-->
                            
                        
                    </div>
                    <input type="submit" value="save" class="save">
                </div>
            </form>    
        </div>
    </div>
   

