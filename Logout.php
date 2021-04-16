<?php
    session_start();

    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Log out</title>
</head>
<body>

  <div class="container p-5">
  <h1 class="">You are logged out</h1>
  <button class="btn btn-primary"><a href="login.php">Login</a></button>

  </div>
  
</body>
</html>


