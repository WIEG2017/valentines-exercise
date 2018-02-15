<?php
    include "incl/header.php";

    if(isset($_SESSION['CID'])) header('Location: ./index.php');

    $error = false;
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $_POST['email']    = strtolower($_POST['email']);
        $_POST['password'] = strtolower($_POST['password']);

        foreach($customers as $key => $value) {
            if(($value['email'] == $_POST['email']) && ($value['password'] == $_POST['password'])) {
                $_SESSION['CID'] = $key;
                $namn = $value['name'];

                echo "<script type='text/javascript'>alert('Välkommen $namn');
                window.location.replace(\"index.php\")
                </script>";
                //header('Location: ./index.php');
            }
        }
        
        $error = true;
    }
?>

<?php
   if($error) echo '<h2 style="color: red;">Användarnamn eller lösenord är fel!</h2>';
?>
<form class='formLogin' method="POST">
   <input type="text" placeholder=" Email" name="email"/>
   <input type="text" placeholder=" Password" name="password"/>
   <button class="loginButton" type="submit">Logga in</button>
</form>

<!-- Här ska vi ha ren HTML kod! -->

<?php
    include "incl/footer.php";
?>


