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
function build_table($list) {

    $html = '<table>';

    $html .= '<tr>';
    foreach($list[0] as $key=>$value){
        $html .= '<th>' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';

    foreach( $list as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
}
// foreach ($list [0] as $key=>$value)

$img = array ("rosor", "nalle", "smycken");

shuffle($img);
foreach ($img as $picture) {
    echo "<img src= 'img/$picture.jpg'> <br>";
}

$list = array (array ("title"=>"blommor", "price"=>"200kr"),
                array("title"=>"mjukisdjur", "price"=>"150kr"), 
                array("title"=>"smycken", "price"=>"700kr")
);
// print_r(array_values($list));

echo build_table($list);

?>


</body>
</html>