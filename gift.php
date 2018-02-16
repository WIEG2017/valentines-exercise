<?php
    session_start();    
    include 'include/header.php';
    include 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present tips</title>
</head>
<body>
    
<a href="https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds"></a>
<a href="https://www.nalleriet.se/alla-hjartans-dag-nallar/"></a>
<a href="http://www.inovadesign.se/hogtider/alla-hjartans-dag/"></a>


<?php

//Array items
$list = array(array("title"=>"Blommor", "price"=>"200 kr", "img"=>"rosor", "href"=>"https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds"),
   array("title"=>"Mjukisdjur", "price"=>"150 kr", "img"=>"nalle", "href"=>"https://www.nalleriet.se/alla-hjartans-dag-nallar/"),
  array("title"=>"Smycken", "price"=>"700 kr", "img"=>"smycken", "href"=>"http://www.inovadesign.se/hogtider/alla-hjartans-dag/")
);


//Tabel för items
echo '<table>';

foreach ($list as $item)  {
    echo '<tr>';
    echo '<td>'.$item["title"].'</td>';
    echo '<td>'.$item["price"].'</td>';
    echo "<td><img class='imgGifts'src= 'img/".$item['img'].".jpg'></td>";
    echo '<td><a href="'.$item["href"].'">Gå till butik</td>';
    echo '</tr>';
}
echo '</table>';


    include 'include/footer.php';
?>
