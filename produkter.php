<?php
    include "incl/header.php";
    
    $array    = array();
    $array[0] = array("title" => "Alla produkter", "link" => "produkter.php");
    foreach($categories as $key => $value) {
        $array[$key] = array("title" => $value, "link" => "produkter.php?catid=$key");
    }
    
    if(isset($_GET['catid'])) {
        $catid = intval($_GET['catid']);
        if(!isset($categories[$catid])) die(header('Location: ./produkter.php'));
        $array[$catid]['link'] = null;
        unset($_GET['catid']);
        
    } else $array[0]['link'] = null;
?>
<div class="content">
    <h2 class="row">
        <?php
            if(is_null($array[0]['link'])) echo $array[0]['title'];
            else echo '<a class="catlink" href="'.$array[0]['link'].'">'.$array[0]['title'].'</a>';
            echo '&nbsp;&nbsp;&raquo;&nbsp;&nbsp;'; unset($array[0]);
            
            $separator = false;
            foreach($array as $value) {
                if($separator) echo '&nbsp;&nbsp;|&nbsp;&nbsp;';
                else $separator = true;
                
                if(is_null($value['link'])) echo $value['title'];
                else echo '<a class="catlink" href="'.$value['link'].'">'.$value['title'].'</a>';                
            }            
        ?>
    </h2>
    <div class="row">
    <?php       
        foreach($products as $key => $value) {
            if(isset($catid)) {
                if($catid == $value['catid']) {
                    echo '<a class="item" href="produkt.php?prodid='.$key.'">';
                    echo '<img alt="'.$value['name'].'" src="'.$value['image'].'" />';
                    echo '<label class="pname">'.$value['name'].'</label>';
                    echo '<label class="pprice">'.$value['price'].' kr</label></a>';
                }
            
            } else {
                echo '<a class="item" href="produkt.php?prodid='.$key.'">';
                echo '<img alt="'.$value['name'].'" src="'.$value['image'].'" />';
                echo '<label class="pname">'.$value['name'].'</label>';
                echo '<label class="pprice">'.$value['price'].' kr</label></a>';
            }
        }
    ?>
    </div>
</div>

<?php
    include "incl/footer.php";
?>