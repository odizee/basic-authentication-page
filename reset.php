<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
</head>
<body>

  <div class="container p-5">
  <h1 class="">RESET PASSWORD</h1>
    <form  action="" method="post" class="w-50">
      <div class="form-group">

        <label for="name" style="font-family: Tahoma;">Name:</label>
        <input class="form-control" type="text" name="user" >
      </div>
      <div class="form-group">
        <label for="password" style="font-family: Tahoma">New Password:</label>
        <input class="form-control" type="password" name="pass">
      </div>
      <div class="form-group">
      <input type="submit" name="reg" value="RESET" class="btn btn-primary">
      <button><a href="login.php" class="btn btn-primary">Login</a></button>
      </div>
    </form>  
  </div>
  
</body>
</html>

<?php


if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    // check if user exist.
    $lines = file("data.txt");
foreach ($lines as &$line) {
    list ($id, $s) = explode(';', $line);
    if($id == $_POST["user"]) {
        $line = $_POST["user"].";".$_POST['pass']."\n";
        echo 'Reset Successfully';
        break;
        
    }
    
}
file_put_contents("data.txt", implode('', $lines));

}
?>