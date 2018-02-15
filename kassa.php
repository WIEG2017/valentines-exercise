<?php
session_start(); 
include 'include/header.php';
include 'include/loginfunction.php';
if($_SESSION['email']){
  echo "du är inloggad";
}else{
  include 'include/login.php'; 
}
?>