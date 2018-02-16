<?php
session_start();
if($_POST['email']){
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['email'] = $_POST['email'];

}
if($_POST['delete']){
session_unset(); 
}
?>