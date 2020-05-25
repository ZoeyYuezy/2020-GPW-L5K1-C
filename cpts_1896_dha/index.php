<?php

// make db conection
require('includes/db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else { 
        // Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2. Prepare query
        $query  = "SELECT username, email, password, level "; 
        $query .= "FROM users ";
        $query .= "WHERE username = '$username' AND password = '$password' ";

        // 2. Execute query
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("query is wrong");
        }

        // Save data to $row
        $row = mysqli_fetch_array($result);
        
        // Check how many answers did we get
        $numrows=mysqli_num_rows($result);
        if ($numrows == 1) {
            // Start to use sessions
            session_start();
            
            
            // Create session variables
            $_SESSION['login_user'] = $username;
            $_SESSION['login_level'] = $row['level'];
            
            if ($_SESSION['login_level'] == 3) {
                header('location: home.php');
            } else if ($_SESSION['login_level'] == 5) {
                header('location: home.php');
            } else {
                header('location: home.php');
            }
            
        } else {
            echo "Login failed";
        }
        
        // 4. free results
        mysqli_free_result($result);
    }
}

// 5. close db connection
mysqli_close($connection);

?>

<!DOCTYPE html>

<?php

require('includes/header.php');

if (isset($error)) {
    echo "<span>" . $error ."</span>";
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>CCL</h1>
                  </div>
                  <p>Chengdu Consultancy Law</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate" action="home.php" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                      <input type="submit" name="submit" value="login" class="btn btn-primary">
                      
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                    <a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.php" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="#" class="external">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>