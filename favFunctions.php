<?php
    session_start();
    if(!isset($mainLoaded))
    {
        require "incl/main.php";
    }
    $mainLoaded = true;

    if(isset($_POST['pagename']) && isset($_POST['pageurl']))
    {
        $newFave = new Favourite($_POST['pagename'], $_POST['pageurl']);
        if(isset($_SESSION['fav']))
        {
            $newFave->addToArray($_SESSION['fav']);
        }
    }

    if(isset($_POST['remove']))
    {
        unserialize($_SESSION['fav'][$_POST['target']])->removeFromArray($_SESSION['fav']);
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>