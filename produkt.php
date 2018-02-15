<?php
    include "incl/header.php";
    
    if(isset($_GET['prodid'])) {
        $prodID = intval($_GET['prodid']);
        if(isset($products[$prodID])) $product = $products[$prodID];
        unset($_GET['prodid']);
    }
    
    if(empty($product)) die(header('Location: ./index.php'));
    
    if(isset($_GET['atoc'])) {
        $cart = new Cart();
        $cart->addItem($prodID);
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
            <a class="addbtn" href="produkt.php?prodid=<?=$prodID;?>&atoc">Lägg i kundvagn</a>
        </div>
    </div>
</div>

<?php
    include "incl/footer.php";
?>