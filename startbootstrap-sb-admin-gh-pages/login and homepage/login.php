<?php

// make db connection
require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else {
        //Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];

        //2. Prepare query
        $query  = "SELECT username, password, level ";
        $query .= "FROM users ";
        $query .= "WHERE username = '$username' AND password = '$password' ";

        //echo $query;
        //2. Execute query
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("query is wrong");
        }

        $row = mysqli_fetch_array($result);

        // Check how many rows are selected
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            // Start to use sessions
            session_start();

            // Create session variable
            $_SESSION['login_user'] = $username;
            $_SESSION['login_level'] = $row['level'];

            if ($_SESSION['login_level'] == 6) {
                header('location: a.php');
            } else {
                header('location: rad.php');
            }

        } else {
            echo "Login failed";
        }

         // 4.free results
        mysqli_free_result($result);
    }
}

//5. close db connection
mysqli_close($connection);

?>
<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
        <title> Tesla Factory</title>
        <body background="http://222.186.12.239:10010/tsldd_131129/005.jpg"
style=" background-repeat:no-repeat ;
background-size:100% 100%;
background-attachment: fixed;"
text="#68228B" onload="setInterval('clock()',1000)">

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="login.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Tesla Factory</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Message</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        
        </head>
    <html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Login</title>  
    <link rel="stylesheet" type="text/css" href="Login.css"/>  
</head>  
<body>
    <div id="login">  
        <h1>Login</h1>  
        <form action="login.php" method="POST">  
            <label>Username</label><input type="text" placeholder="username" name="username">  
            <label>Password</label><input type="password" placeholder="password" name="password">  
            <button name="submit" type="submit" value="login" class="hsdjh">login </button>
            <hr>

        </form> 
            <button class="button1" style="background-color: yellow;color: white;"><a href= "new.php"> <h4>Registered</h4></a></button>
    </div>  
</body>  
</html>  
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php 
if (isset($error)) {
    echo "<span>" . $error ."</span>";
}
?>
