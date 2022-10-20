<?php
include "css.php";
include "dbconn.php";
$data= $conn->query("SELECT * FROM signup");
$fetch=$data->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="login" action="" method="post">
        <h3>Signup here</h3>
        <label>Name</label>
        <input type="text" name="username" /><br><br>
        <label>Username</label>
        <input type="email" name="email" /><br><br>
        <label>Password</label>
        <input type="password" name="password" /><br><br>
        <label>Add money to Wallet</label>
        <input type="text" name="money" /><br><br>
        <input type="submit" name="submit" value="submit"/><br><br>
        <a href="login.php">Login here</a>
    </form>
    <?php

if(isset($_POST['submit']))
{
    if(empty($_POST['username']) && empty($_POST['email']) && empty($_POST['password']))
    {
        echo "please fill both fields";
        exit();
    }
    
    else
    {
        $user= $_POST['username'];
        $email= $_POST['email'];
        $password= $_POST['password'];
      
        $insert= $conn->query("INSERT INTO signup(username,email,password) VALUES('$user','$email','$password')");
       
        if($insert)
        {
           
                echo "user sign in";
            
        }
    }
   
}
?>    
</body>
</html>
