<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Present tips</title>
</head>
<body>

<!-- <a href="https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds">select</a>
<a href="https://www.nalleriet.se/alla-hjartans-dag-nallar/">select</a>
<a href="http://www.inovadesign.se/hogtider/alla-hjartans-dag/">select</a> -->

<?php

$list = array ("blommor" => "200kr","mjukisdjur" => "150kr","smycken" => "700kr");
print_r(array_values($list));



?>


<?php

foreach ($list as $site_title => $url){
    // echo "<a href=$url>$site_title</a><br>";
    echo "<a href=https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds></a>"


function productGrid() {
    echo "<img src='img/rosor.jpg' alt='bild kan inte visas' /><table><tr><th>'Blommor'</th>[0]</th><th><a href=https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds></a></th></tr>'";
    echo "<img src='img/nalle.jpg' alt='bild kan inte visas' /><table><tr><th>'Mjukisdjur'</th>[1]</th><th><a href=https://www.nalleriet.se/alla-hjartans-dag-nallar/></a></th></tr>'";
    echo "<img src='img/smycken.jpg' alt='bild kan inte visas' /><table><tr><th>'Smycken'</th>[2]</th><th><a href=http://www.inovadesign.se/hogtider/alla-hjartans-dag/></a></th></tr>'";



} 
}




?>




    
    
    




</body>
</html>