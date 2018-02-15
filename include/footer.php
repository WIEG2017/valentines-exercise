<?php session_start(); ?> 
<div class="footer">
<?php
if($_POST['check1'] || $_POST['check2'] || $_POST['check3'] || $_POST['check4'] || $_POST['check5'] || $_POST['check6'] ){
$_SESSION['footer'] = $_POST;
}
echo "<br/>";
foreach($_SESSION['footer'] as $key=>$value){
    echo "<a href=".$value.".php>$value</a>";
}
?>
</div>
</body>
</html>