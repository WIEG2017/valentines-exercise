<?php
    session_start();
    $page_title = "Sign Up";
    
    if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password']))
    {
        $list = array(
            'email' => $_POST['email'],
            'name' => $_POST['name'],
            'password' => $_POST['password'],
        );
        array_push($_SESSION['customers'], $list);
        header('Location: index.php');
    }
    
    include "incl/header.php";
?>

<wrapper>
    <form method="post" action="signup.php" class='formSignup'>
        <input type="text" class="textInput" placeholder=" Name" name="name"/>
        <input type="text" placeholder=" Email" name="email"/>
        <input type="password" placeholder=" Password" name="password"/>
        <button class="signupButton" type="submit">Bli medlem</button>
    </form> 
</wrapper>

<?php
    include "incl/footer.php";
?>
