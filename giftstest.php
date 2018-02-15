<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present tips</title>
</head>
<body>
    
<?php

$img = array ("rosor, nalle", "smycke");

shuffle($img);
foreach ($img as $picture) {
    echo "<img src= 'img/$picture.jpg'> <br>";
}

$list = array ("blommor" => "200kr","mjukisdjur" => "150kr","smycken" => "700kr");
print_r(array_values($list));



?>


</body>
</html>