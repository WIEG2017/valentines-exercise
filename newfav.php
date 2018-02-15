<?php
    require 'incl/data.php';
    require 'incl/classes.php';
    session_start();

    if(isset($_POST['pagename']) && isset($_POST['pageurl']))
    {
        $newFave = new Favourite($_POST['pagename'], $_POST['pageurl']);
        if(isset($_SESSION['fav']))
        {
            array_push($_SESSION['fav'], $newFave);
        }
    }
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>