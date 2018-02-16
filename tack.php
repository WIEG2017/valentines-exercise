<?php
    if(!isset($mainLoaded))
    {
        require "incl/main.php";
    }
    $mainLoaded = true;

    $page_title = "Orderbekräftelse";
    include "incl/header.php";

    if(!isset($_SESSION['CID'])) header('Location: ./login.php?url=kundvagn.php');
    if(!count($theCart->getItems())) header('Location: ./kundvagn.php');
    $theCart->removeCART();
    
?>

<div class="content">
    <h1 class="row">Tack för din beställning</h1>
</div>

<?php
    include "incl/footer.php";
?>