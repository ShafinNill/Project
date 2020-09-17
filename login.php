<?php
$db = mysqli_connect("localhost", "mastershan", "123456789","webtech");
if(isset($_POST['submit_button'])){
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM people WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)==1){
     $_SESSION['email']=$email;
     header("location:homepage.php");
    }else{
        echo "Incorrect email/password combination. Check and proceed again.";


    }
    
}
if(isset($_POST['signin_button'])){
    /* session_start();
     $email = $_POST['email'];
     $password = md5($_POST['password']);
     $sql = "SELECT * FROM people WHERE email='$email' AND password='$password'";
     $verify = mysqli_query($db, $sql);
 
     if(mysqli_num_rows($verify)==1){
      $_SESSION['email']=$email;*/
      header("location:signup.php");
     }


?>





<!DOCTYPE html>
<html>
    <head>
        <title>PROJECT</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <h1 align="center">WELCOME TO THE PORTAL</h1>
        <fieldset>
        <legend align="center"><h2>"LOGIN"</h2></legend>
        <form method="post" action="hrlogin.php">
           
            <table align="center">
                
               
                <tr>
                    <td>EMAIL:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    
                    <td ><input type="submit" name="submit_button" value="Login" required></td>
                </tr>
                <tr>
                    <td>Don't have an account?</td>
                    
                </tr>
                <tr>
                    
                    <td ><input type="submit" name="signin_button" value="Sign in" required></td>
                </tr>
                
                
                    
               
                
    </fieldset>  
        </form>
    </body>    
</html>