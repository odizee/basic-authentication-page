<!DOCTYPE html>
<html lang="en">
<head>
<title> Registration Page   </title>
</head>
<body>
<h1>REGISTER</h1>
<form action="" method="post">
    <div>
      <label>  UserName</label>
      <label> <input type="text" name="user" > </label>
    </div>
    <div>
      <label> PassWord  </label>
      <input type="password" name="pass">
    </div>
    <div>
      <input type="submit" name="reg" value="REG">
      <button><a href="login.php">Log in</a></button>
    </div>
</form>
</body>
</html>

<?php
if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    // check if user exist.
    $file=fopen("data.txt","r");
    $finduser = false;
    while(!feof($file))
    {
        $line = fgets($file);
        $array = explode(";",$line);
        if(trim($array[0]) == $_POST['user'])
        {
            $finduser=true;
            break;
        }
    }
    fclose($file);
 
    // register user or pop up message
    if( $finduser )
    {
        echo $_POST["user"];
        echo ' exists!';
        // include 'reg.html';
    }
    else
    {
        $file = fopen('data.txt', 'a');
        fputs($file,$_POST["user"].";".$_POST["pass"]."\r\n");
        fclose($file);
        
        // include 'login.html';
        // header('Location: login.php');

        echo $_POST["user"];
        echo " registered successfully!";
        
    }
}
else
{
    // include 'reg.html';
}
?>