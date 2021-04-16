<!DOCTYPE html>
<html lang="en">
<head>
<title> Login Page   </title>
</head>
<body>
<h1>LOGIN</h1>
<form action="" method="post">
    <div>
      <label>  UserName</label>
      <input type="text" name="user" >
    </div>
    <div>
      <label> PassWord  </label>
      <input type="password" name="pass">
    </div>
    <div>
      <input type="submit" name="login" value="LOGIN">
      <button><a href="reg.php">Register</a></button>
    </div>
   
</form>
</body>
</html>

<?php  session_start(); ?> 
 
<?php
 
if(isset($_SESSION['use']))   

 {
    header("Location:home.php"); 
 }
else
{
    // include 'login.html';
}
 
if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
 
    if(isset($_POST["user"]) && isset($_POST["pass"])){
    $file = fopen('data.txt', 'r');
    $good=false;
    while(!feof($file)){
        $line = fgets($file);
        $array = explode(";",$line);
    if(trim($array[0]) == $_POST['user'] && trim($array[1]) == $_POST['pass']){
            $good=true;
            break;
        }
    }
 
    if($good){
    $_SESSION['user'] = $user;
        echo '<script type="text/javascript"> window.open("home.php","_self");</script>';  
    }else{
        echo "invalid UserName or Password";
    }
    fclose($file);
    }
    else{
        // include 'login.html';
    }
 
}
?>