<?php
    if(!isset($mainLoaded))
    {
        require "incl/main.php";
    }
    $mainLoaded = true;

    $page_title = "Kundvagn";
    include "incl/header.php";

    if(!isset($_SESSION['CID'])) header('Location: ./login.php');

    $items = $theCart->getItems();
?>

<div class="content">
    <h1 class="row">Kundvagn</h1>
    <?php
        if(count($items)) {
            foreach($items as $prodID => $product) {
                echo '<div class="row"><div style="padding: 10px;">';
                echo '<img alt="'.$product['name'].'" style="width: 150px;" src="'.$product['image'].'" /></div>';
                echo '<div>'.$product['name'].'<br/>Pris: '.$product['price'].'<br/>Antal: '.$product['quntty'].'</div></div>';
            }
            
            echo '<h2 class="row">Att betala: '.$theCart->totalPrice().' kr</h2>';
            
            if(isset($_SESSION['CID'])) echo '<div class="row"><a class="addbtn" href="tack.php">Beställa</a></div>';
            else echo '<div class="row"><a class="addbtn" href="login.php">Logga in</a></div>';
            
        } else echo '<h2 class="row" style="color: red;">Kundvagnen är tom!</h2>';
    ?>
</div>

<?php
    include "incl/footer.php";
?>