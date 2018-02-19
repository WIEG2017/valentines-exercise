<?php
session_start();    

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if(isset($_POST['button'])) {
    ++$_SESSION['counter'];
}  

if(isset($_POST['reset'])) {
    $_SESSION['counter'] = 0;
}

include '../include/header.php';
include '../include/functions.php';
?>

<?php


/* echo '<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = post>';
echo '<input type="submit" name="button" value="Submit">';
echo '<input type="hidden" name="counter" value="<?php print $counter;?>"; />';
echo "</form>"; */
?>

 <div class="CartClass">Produkter i Varukorg: <b> <?php echo $_SESSION['counter']; ?></b>
 <form method="POST">
 <input type="submit" name="reset" value="Nollställ">
 </form>
 </div> 
<?php
echo "<h1>Godiva Drömchokladshjärtat</h1>";
echo "<img src='/img/candy1.jpg'</img>";
echo "<div>En stor låda med 76 olika chokladpraliner, ge din käraste en mumsig present.</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="1099;" />
   
</form>
</html>
<?php
echo "<h1>Lindt Lindor</h1>";
echo "<img src='/img/candy2.jpg'</img>";
echo "<div>Chokladfyllda bollar med drömmig Nougat. Ju färre desto bättre, ät med din käraste och njut till fullo!</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="499:-" />
   
</form>
</html>
<?php

echo "<h1>Merci Choklad</h1>";
echo "<img src='/img/candy3.jpg'</img>";
echo "<div>Kaffechoklad, hasselnötschoklad och 20 andra sorter till dig och din partner</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="399:-" />
   
</form>
</html>
<?php

echo "<h1>MjölkchokladsHjärtan</h1>";
echo "<img src='/img/candy4.jpg'</img>";
echo "<div>En klassiker ifrån år 1918, gammalt recept med fantastisk smaksensation. Njut!</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="699:-" />
   
</form>
</html>
<?php

echo "<h1>HallonFiskar</h1>";
echo "<img src='/img/candy5.jpg'</img>";
echo "<div>Drömgodiset som vi på VallyBally tycker är den bästa som finns</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="199:-" />
   
</form>
</html>
<?php

echo "<h1>Trolli - Sura Hjärtan</h1>";
echo "<img src='/img/candy6.jpg'</img>";
echo "<div>Sockerkick deluxe och många olika smaker i den sura genren.</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="89:-" />
   
</form>
</html>
<?php

echo "<h1>Godishjärtan med Fina Ordvistelser</h1>";
echo "<img src='/img/candy7.jpg'</img>";
echo "<div>Detta är en utav de vackraste godisarna som vi säljer på VallyBally. Ni kommer förstå varför.</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="4999:-" />
   
</form>
</html>
<?php

echo "<h1>Alla Hjärtans Dag-Nörd-Godis</h1>";
echo "<img src='/img/candy8.jpg'</img>";
echo "<div>Denna är helt klart bäst, smakar bättre än de andra godisarna.</div><br/>";
?>
<html>
<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']?>"/>
    <input type="submit" name="button" value="149:-" />
   
</form>
</html>
<?php

?>



















<?php
    include '../include/footer.php';
?>
