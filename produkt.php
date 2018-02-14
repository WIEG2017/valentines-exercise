<?php
    include "incl/header.php";
    
    if(isset($_GET['prodid'])) {
        $prodID = intval($_GET['prodid']);
        if(isset($products[$prodID])) $product = $products[$prodID];
        unset($_GET['prodid']);
    }
    
    if(!isset($product)) die(header('Location: ./index.php'));
    
    /**
     * I have used "CART" as key for the cart in session.
     * The cart is an array of key => value; the key is the id of the product
     * and the value is an associative array that contains name, image, price and
     * the quantity of the product in the cart.
     */   
    
    if(isset($_GET['add2cart'])) {
        $cart = array();
        if(isset($_SESSION['CART'])) $cart = $_SESSION['CART'];
        
        if(isset($cart[$prodID])) $cart[$prodID]['quantity']++;
        else $cart[$prodID] = array(
            'name'     => $product['name'],
            'image'    => $product['image'],
            'price'    => $product['price'],
            'quantity' => 1
        );
        
        $_SESSION['CART'] = $cart;
        die(header("Location: ./produkt.php?prodid=$prodID"));
    }
?>
<div class="content">
    <div class="row">
        <div class="column"><img alt="<?=$product['name'];?>" src="<?=$product['image'];?>" /></div>
        <div class="column">
            <h1><?=$product['name'];?></h1>
            <h3 class="gray"><?=$product['dscrptn'];?></h3>
            <div class="price"><?=$product['price'];?> kr</div>
            <a class="addbtn" href="produkt.php?prodid=<?=$prodID;?>&add2cart">Lägg i kundvagn</a>
        </div>
    </div>
</div>

<?php
    include "incl/footer.php";
?>