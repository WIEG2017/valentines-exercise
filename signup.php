<?php
    session_start();

        if(count ($_POST) > 0) {

           $list = array(
                'email'    => $_POST['email'],
                'name'     => $_POST['username'],
                'password' => $_POST['password'],  
                
            );
        }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
</head>
<body>
<div class="header">
<h1>Register</h1>
</div>

<wrapper>
    <form method="post" action="register.php" class='formSignup'>

        <input type="text" class="textInput" placeholder=" username" name="username"/>
        <input type="email" class="textInput" placeholder=" Email" name="email"/>
        <input type="password" placeholder=" Password" name="password"/>
        <button type="submit" name="register_btn" class="signupButton" value="">Bli medlem</button>

    </form> 
</wrapper>
    
</body>
</html> 