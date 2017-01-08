<?php
session_start();
if (isset($_SESSION['login_user'])){
    header('Location: ./browse.php');  
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Säker inloggning: Registrering</title>

        <link rel="stylesheet" href="styles/main.css"/>
    </head>
    <body>
        <h1>Register</h1>

        <ul>
                
            <li>Fill out the form below to sign up </li>
        </ul>
        <form action="register.php" 
                method="post" 
                name="registration_form">
            username: <input type='text' 
                name='username' 
                id='username' /><br>
            password: <input type="text" name="password" id="password" /><br>
            first name: <input type="text"
                             name="firstname" 
                             id="firstname"/><br>
            last name: <input type="text" 
                                     name="lastname" 
                                     id="lastname" /><br>
            <input type="submit" 
                   value="Register"/> 
        </form>
        <p>Or <a href="login.php">log in</a>.</p>
    </body>
</html>