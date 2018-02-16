<?php
    session_start();    

        
        include '../include/data.php';
        
        include '../include/header.php';
  
       
        $userName = $_SESSION['hellouser'];
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($_SESSION['FirstVisit'])) {
            echo "<script type='text/javascript'>alert('Välkommen $userName med ip: $ip ');</script>";
            $_SESSION['FirstVisit'] = 1;
    
        }
        
        
        
?>
<form action = "../include/logout.php" method = "post">
    <button class = "logout" type= "submit" name="logout" value = "true" >Logga ut</button>  
</form>    
<div class="container">
    <div class="row">
    <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="../img/singlar/etype.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">E-Type</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Date Me</a>
        </div>
        </div>
    </div

    <div class="row">

    <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="../img/singlar/leif.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Leif</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Date Me</a>
        </div>
        </div>
        </div

        <div class="row">

    <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="../img/singlar/magnusuggla.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Magnus Uggla</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Date Me</a>
        </div>
        </div>
        </div>
        </div>
        

        <div class="row">
    <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="../img/singlar/martinT.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Martin T</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">GDate Me</a>
        </div>
        </div>
        </div>
        
  

        <div class="row">
        <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="../img/singlar/ranelid.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Ranelid</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Date Me</a>
        </div>
        </div>
        </div>
        </div>
        

       
    <div class="col-sm-4">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="../img/singlar/babben.jpg" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Babben</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Date Me</a>
        </div>
        </div>
        </div>
        </div>
        
</div>