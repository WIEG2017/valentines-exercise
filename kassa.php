<?php
session_start(); 
include 'include/header.php';
include 'include/loginfunction.php';
if($_POST['email']){
  $msg = "you are logged in with this ip address : ".$_SESSION['ip']."\\n and this email : ".$_SESSION['email'].".";
  echo "<script type='text/javascript'>alert('$msg');</script>";
}
if($_SESSION['email']){
  echo "du är inloggad";
}else{
  include 'include/login.php'; 
}
?>
<?php 
include 'include/footer.php';
 ?>