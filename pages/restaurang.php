<?php
    // session_start();    
    // include 'include/header.php';
    // include 'include/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurang tips</title>
</head>
<body>

<a href="http://ottomania.se/?utm_source=thatsup&utm_medium=referral"></a>
<a href="http://restaurangmeet.se/wordpress/home/"></a>
<a href="http://www.rumi.se/?utm_source=thatsup&utm_medium=referral"></a>
<a href="http://www.dorsia.se/?utm_source=thatsup&utm_medium=referral"></a>
    
<?php 
// echo '<a href="http://ottomania.se/?utm_source=thatsup&utm_medium=referral"><img src="ottomania-3.jpg" /></a>';
// echo '<a href="http://restaurangmeet.se/wordpress/home/"><img src="restaurang-meet-3.jpg" /></a>';
// echo '<a href="http://www.rumi.se/?utm_source=thatsup&utm_medium=referral"><img src="rumi-persian-cuisine-1.jpg" /></a>';
// echo '<a href="http://www.dorsia.se/?utm_source=thatsup&utm_medium=referral"><img src="Dorsia_01-LARGE.jpg" /></a>';
?>

<?php
$image_name = '/pages/ottomania-3.jpg';
$image_url = 'http://ottomania.se/?utm_source=thatsup&utm_medium=referral';
?>

<a href='<?php echo $image_url; ?>' border='0'><img src'<?php echo $image_name; ?>'></a>
</body>
</html>





<?php
    // include 'include/footer.php';
?>