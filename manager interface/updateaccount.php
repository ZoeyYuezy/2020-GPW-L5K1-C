<?php
require_once('logincheck.php');
require_once('db.php');

// 2. Do a query (Select all cars)
$query  = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
    

?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CBC - updateaccount</title>

      <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index2.php">CBC Staff Management</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Pages</a>
          <a class="dropdown-item" href="register.html">Sign up</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="memo.php">Memo</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Log out</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Function:</h6>
          <a class="dropdown-item" href="logout.php">Log out</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
    
          <a class="dropdown-item" href="memo.php">Memo Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sale.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sales Volume Tables</span></a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="ticket.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tickets information Tables</span></a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="bus.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Bus information Tables</span></a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="account.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Account Management</span></a>
      </li>
        
    </ul>
      
      <?php
                     $id = $_GET['id'];

     
 if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    

     

    // 2. Do a query (Select all cars)
    $query  = "UPDATE users SET id = '$id', username = '$username', password = '$password', level = '$level' ";
    $query .= "WHERE id = $id";
     
    
    
  

    mysqli_query($connection, $query);


}
                     
                     ?>

<div class="container-fluid">
        <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h1>update user account</h1>
               <a class="btn btn-primary" href="account.php" style="margin-left: 1000px; margin-top: -10;">Return</a>
           </div>
        </div>    
       
                 <table class="table table-bordered" id="s" width="100%" cellspacing="0">
    
                   <thead>
                       <tr>
                           <th>User name</th>
                           <th>Password</th>
                           <th>Level</th>
                           
                           

                       </tr>
                    </thead>
                    </table>
                
                
        <div class="updateaccount.php">
        <form action="updateaccount.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            User name<input type="text" name="username">
            Password<input type="text" name="password">
            Level<input type="text" name="level">
          
            
            <input type="submit" name="submit" value="Update" >
            </form>
        </div>
                  
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
          



                     
                     

    

// 5. close db connection
mysqli_close($connection);

?>
      
      
      <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>