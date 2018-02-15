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

<!--Tabel-->
<?php
function build_table($list) {
    $html = '<table>';

    $html .= '<tr>';
    foreach($list as $prod=>$blad){
        $html .= '<th>' . htmlspecialchars($prod) . '</th>';
    }
    $html .= '</tr>';

    foreach( $list as $unit=>$nalle){
        $html .= '<tr>';
        foreach($nalle as $ring){
            $html .= '<td>' . htmlspecialchars($ring) . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
}
// foreach ($list [0] as $key=>$value)

// $img = array ("rosor", "nalle", "smycken");

// shuffle($img);
// foreach ($img as $picture) {
//     echo "<img src= 'img/$picture.jpg'> <br>";
//}

//Array items
$list = array(array("title"=>"blommor", "price"=>"200 kr", "img"=>"rosor", "href"=>"https://www.euroflorist.se/alla-hjartans-dag-ct1693?gclid=EAIaIQobChMI_7y52L6l2QIVBswYCh0ONwbBEAAYASAAEgKlgfD_BwE&gclsrc=aw.ds"),
   array("title"=>"mjukisdjur", "price"=>"150 kr", "img"=>"nalle", "href"=>"https://www.nalleriet.se/alla-hjartans-dag-nallar/"),
  array("title"=>"smycken", "price"=>"700 kr", "img"=>"smycken", "href"=>"http://www.inovadesign.se/hogtider/alla-hjartans-dag/")
);

             


foreach ($list as $item) {
    echo "<img src= 'img/".$item['img'].".jpg'> <br>";
    
// print_r(array_values($list));

//Tabel för items
echo build_table($list);

echo '<table>';
echo '<tr><th>title</th><th>price</th><th>img</th></tr>';
foreach ($list as $item)  {
    echo '<tr>';
    echo '<td>'.$item["title"].'</td>';
    echo '<td>'.$item["price"].'</td>';
    echo '<td>'.$item["img"].'</td>';
    echo '<td>'.$item["href"].'</td>';
    echo '</tr>';
}
echo '</table>';
}

?>


<!--länkar i array-->
<ul class="link">
<?php foreach($list as $list_link) : ?>
<li>
<a href="<?php echo $list_link["href"]; ?>">
<?php echo $list_link["title"]; ?>
    </a>
</li>

<?php endforeach; ?>
</ul>


</body>
<?php
    include 'include/footer.php';
?>
</html>