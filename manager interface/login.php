<?php

// make db conection
require('db.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "username or password is empty";
    } else { 
        // Save username & password in a variable
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2. Prepare query
        $query  = "SELECT username, password, level "; 
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
            
            if ($_SESSION['login_level'] == 1) {
                header('location: book/index.php');
            } else if ($_SESSION['login_level'] == 2) {
                header('location: index2.php');
            }
            
        } else {
            header('location:loginfailed.php');
        }
        
        // 4. free results
        mysqli_free_result($result);
    }
}

// 5. close db connection
mysqli_close($connection);

?>

<?php

if (isset($error)) {
    echo "<span>" . $error ."</span>";
}

?>
            
<!DOCTYPE html>
<html>
    
<head>
    <style>
body{background:url(cbc.jpg) top left;
background-size:100% 768px;}
</style>
        <title>Chengdu Bus Company</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form method="POST" id="loginform" class="form-vertical" action="login.php">
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="username" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" name="submit" value="Login"> </span>
                </div>
            </form>
            <form id="recoverform" method="post" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info">Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
