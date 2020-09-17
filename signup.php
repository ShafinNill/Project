<?php
$db = mysqli_connect("localhost","mastershan", "123456789","webtech");
if(isset($_POST['submit_button'])){
    session_start();
    
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password = md5($_POST['password']); 
    $confirmpassword = md5($_POST['confirmpassword']);
    if($password==$confirmpassword)
    {
    $sql ="INSERT INTO people(name,email,phone,gender,address,password,confirmpassword) VALUES('$name','$email','$phone','$gender','$address','$password','$confirmpassword')";
    mysqli_query($db,$sql);
    
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['gender']=$gender;
    $_SESSION['address']=$address;
    //$_SESSION['password']=$password;
    //$_SESSION['confirmpassword']=$confirmpassword;
    header("location:login.php");
    }
    else echo "password does not match";
}
//echo "WELCOME TO THE PORTAL";



?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROJECT</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>
    <body>
    <h1 >WELCOME TO THE PORTAL</h1>
        <form method="post" action="signup.php">
        <fieldset>
        <legend align="center"><h2>"SIGN UP"</h2></legend>
            <table align="center">
            
                
                <tr>
                    <td>NAME:</td>
                    <td><input type="text" name="fullname" required></td>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>PHONE:</td>
                    <td><input type="phone" name="phone" required></td>
               
                </tr>
                <tr>
                <td>GENDER:<br>
                    <input type="radio"  name="gender" value="male"> Male
                    
                    <input type="radio"  name="gender" value="female"> Female
                    
                    <input type="radio"  name="gender" value="other"> Other</td><br>
                    
                    
                </tr>
                
                <tr>
                    <td>ADDRESS:</td>
                    <td><input type="address" name="address" required></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>CONFIRM PASSWORD:</td>
                    <td><input type="confrimpassword" name="confirmpassword" required></td>
                </tr>    
                <tr>
                    
                    <td align="right"><input type="submit" name="submit_button" value="Sign Up" required></td>
                </tr>
                <tr>
                    
                    <td><p><br><br><br><br>Copyright &copy; 2020 My Site</p></td>
                </tr>
                
            </fieldset>    
        </form>
        
		
	    
    </body>    
</html>