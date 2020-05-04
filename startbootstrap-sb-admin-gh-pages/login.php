<?php

//make db conection
require("includes/db.php");

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else {
        // Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // 2. Prepare query
        $query = "SELECT username, password, level ";
        $query.= "FROM users ";
        $query.= "WHERE username = '$username' AND password = '$password' ";
        //echo $query;
        // 2. Execute query
        $result = mysqli_query($connection, $query);
        
        if (!$result){
            die("query is wrong");
        }
        
        $row = mysqli_fetch_array($result);
        
        // Check how many answwers did we get
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            //Start to use sessions
            session_start();
            
            //Create session variable
            $_SESSION['login_user'] = $username;
            $_SESSION['login_level'] = $row['level'];
            
            if  ($_SESSION['login_level'] == 0) {
                    header('location: homepage.php');
                } else if ($_SESSION['login_level'] == 6) {
                    header('location: homepage.php');
                } else if ($_SESSION['login_level'] == 4) {
                    header('location: homepage.php');          
                } else {
                    header('location: homepage.php');
            }
    
        } else {
            header('location:loginfailed1.php');    
        }


        // 4. free results
        mysqli_free_result ($result);
    }
}

// 5. close db connection
mysqli_close($connection);


echo $error;
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="username" id="username" name="username" class="form-control" placeholder="username" required="required" autofocus="autofocus">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" class="form-control" name="password" placeholder="password" required="required">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
            <input type="submit" name="submit" value="login" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
