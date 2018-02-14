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

<?php

$list = array ("blommor" => "200kr","mjukisdjur" => "150kr","smycken" => "700kr");
print_r(array_values($list));

foreach ($list as $site_title => $url){
echo "<a href=$url>$site_title</a>";
}
?>

<?php
$list("border")

?>


    

    <a href="https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds">select</a>
    <a href="https://www.nalleriet.se/alla-hjartans-dag-nallar/">select</a>
    <a href="http://www.inovadesign.se/hogtider/alla-hjartans-dag/">select</a>




</body>
</html>