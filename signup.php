<?php
    $page_title = "Sign Up";
    if(count ($_POST) > 0) {

        $list = array(
             'email'    => $_POST['email'],
             'name'     => $_POST['username'],
             'password' => $_POST['password'],  
             
         );
     }
    include "incl/header.php";
    
?>

<!-- Här ska vi ha ren HTML kod! -->

<wrapper>
    <form method="post" action="register.php" class='formSignup'>

        <input type="text" class="textInput" placeholder=" username" name="username"/>
        <input type="text" placeholder=" Email" name="email"/>
        <input type="text" placeholder=" Password" name="password"/>
        <button class="signupButton" type="submit">Bli medlem</button>

    </form> 
</wrapper>

<?php
    include "incl/footer.php";
?>
