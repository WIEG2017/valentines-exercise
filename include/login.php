<?php
echo "<h1>Inlognings sida</h1>";
echo "<form style='margin-left:10px;' action='".$_SERVER["PHP_SELF"]."' method='post'>";
echo "Email : ";
echo "<input style='width:250px;padding: 5px 5px;' type='email' name='email'><br/><br/>";
echo "<input style='width:100px;padding: 5px 5px;' type='submit' value='Login'>";
echo "</form>";
echo "<form  action='".$_SERVER["PHP_SELF"]."' method='post'>";
echo "<input type='hidden' name='delete' value='true' >";
echo "<input style='width:100px;padding: 5px 5px; margin-top:5px;margin-left:10px;' type='submit' value='Logout'>";
echo "</form>";
?>
