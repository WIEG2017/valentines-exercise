<?php
  session_start();


unset($_SESSION['CID']);

header('location: ./'.$_GET['url']);

?>

    

    

