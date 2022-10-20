<?php
// session_start();
include "css.php";
$server="mysql:host=localhost;dbname=coincap";
$username="root";
$password="";
$conn= new PDO($server,$username,$password);
$data= $conn->query("SELECT * FROM login");
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
    <h3>If you already have account. Please Login to buy</h3>
    
        <label1>Username</label><br>
        <input type="email" name="email"/><br><br>
        <label2>Password</label><br>
        <input type="password" name="password"/><br><br>
        
        <input type="submit" name="login" value="login"/> <br>
        <p>If don't have account?<a href="signup.php">Signup</a></p>
</form>
<?php
if(isset($_POST['login']))
{
    if(empty($_POST['email']) && empty($_POST['password']) && empty($_POST['coins']))
    {
        echo "please fill both fields";
        exit();
    }
   else
   {
       $data=$conn->query("SELECT * FROM signup");
       $fetch= $data->fetchAll(PDO::FETCH_ASSOC);
       foreach($fetch as $key=>$value)
       {

           if($_POST['email']==$value['email'] && $_POST['password']==$value['password'])
           {
            $_SESSION['userid']=$value['id'];
            $email= $_POST['email'];
            $password= $_POST['password'];
            $store= $conn->query("INSERT INTO login(username,password) VALUES('$email','$password')");
            
            if($store)
            {
                echo "user log in";
            }
            
           }
            else
            {
                echo "user not exists!! Please sign up";
                exit();
            }
        
        }
        
   } 
  
}

?>
</body>
</html>
