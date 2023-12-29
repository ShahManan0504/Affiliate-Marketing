<?php
require 'config.php';
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $un=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    $number=$_REQUEST['phone'];
    $repass=$_REQUEST['rpassword'];

    
	
    $check=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `Email`='$email'");

    if(mysqli_num_rows($check)>0){
        echo "<script>alert('Your account was already registered')</script>";
    }
    else{
        if($pass==$repass){
           $sql= "INSERT INTO `userinfo`(`Srno`, `Name`, `Email`, `Username`, `Password`, `PhoneNo`) VALUES (NULL,'$name','$email','$un','$pass','$number')";
           mysqli_query($conn,$sql);
          
            echo "<script>alert('Data is recorded in Data Base')</script>";
            header("Location: login.php");
           
        }
        else{
            echo "<script>alert('password is not matching')</script>";
        }
    }
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jazz Affiliate - User Login</title>
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    color: white;
    overflow: hidden;
}

.background-image {
    background-image: url('back2.jpeg');
    background-size: cover;
    background-position: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.login-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: transparent;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px transparent;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input {
    width: 40%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
}

.button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="background-image"></div>
    <div class="login-container">
        <h1>Welcome to Jazz Affiliate</h1>
        <form method="POST">
            <input type="text" name="name" placeholder="Name:" required>

            <input type="email" name="email" placeholder="Email:" required>

            <input type="number" name="phone" placeholder="Phone No.:" required>

            <input type="text" name="username" placeholder="Username:" required>

            <input type="password" name="password" placeholder="Password:" required>

            <input type="password" name="rpassword" placeholder="Re-Password:" required>

            <input type="submit" name="submit" value="Sign Up" class="button">

            <center><i>Already Have an Account?</i><a href="login.php">Login</a></center>
        </form>
    </div>
</body>
</html>
