<?php
    include '../include/header.php';
    include '../include/functions.php';
?>


    <div id = "login">
        <form method="POST">
            <input type = "text" name = "user">
            <input type = "password" name = "password">
            <button type = "submit">Login</button>
        </form>
    </div>    

<?php
    login($logins);
   
 ?>

















<?php
    include '../include/footer.php';
?>    