<?php
require 'config.php';
    if(isset($_REQUEST['submit']))
    {
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];
        $sql="SELECT * FROM `userinfo` WHERE `Email`='$email'";
        $found=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($found);
        if(mysqli_num_rows($found)>0)
        {
            if($pass==$row['Password'])
            {
                $_SESSION['login']=true;
                $_SESSION['id']=$row['Srno'];

                header("Location: index.php");
            }
            else
            {
                echo "<script>alert('User not register')</script>";
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
    <link rel="stylesheet" href="login.css">
    <style>
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
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" name="submit" value="Login" class="button"/>
        </form>
    </div>
</body>
</html>
