<?php
echo "<h1>Inlognings sida</h1>";
echo "<form action='".$_SERVER["PHP_SELF"]."' method='post'>";
echo "Email : ";
echo "<input type='email' name='email'><br/><br/>";
echo "<input type='submit' value='Login'>";
echo "</form>";
echo "<br/>";
echo "<form  action='".$_SERVER["PHP_SELF"]."' method='post'>";
echo "<input type='hidden' name='delete' value='true' >";
echo "<input type='submit' value='Logout'>";
echo "</form>";
?>
