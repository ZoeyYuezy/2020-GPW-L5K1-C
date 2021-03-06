<?php

require('logincheck.php');
require('db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CBC Management Ticket information Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
          <a class="dropdown-item" href="memo.php">Memo Page</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Log out</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
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
      <li class="nav-item active">
        <a class="nav-link" href="sale.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sales Volume Table</span></a>
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

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index2.php">Home</a>
          </li>
          <li class="breadcrumb-item active">Tickets Information</li>
        </ol>

             
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           
          
              <?php
              // 2. Do a query
$query  = "SELECT routeline.initial_location AS initial_location, routeline.destination As destination, routeline.date As date, routeline.distance As distance, routeline.price AS price, routeline.capacity AS capacity, custom.name AS name, custom.payment AS payment ";
$query .= "FROM routeline "; 
$query .= "JOIN junction ON junction.routeline_id = routeline.id ";  
$query .= "JOIN custom ON junction.custom_id = custom.id ";            
              
             
              
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
             <h6 class="m-0 font-weight-bold text-primary">CBC tickets information</h6>
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                       <tr>
                           <th>customer name</th>
                           <th>initial location</th>
                           <th>destination</th>
                           <th>date</th>
                           <th>distance</th>
                           <th>price</th>
                           <th>capacity</th>
                           <th>payment</th>
                       </tr>
                     </thead>
                  
                  <?php
    
//3. use/show data, as row of the table (PHP& HTML mixed) -->
while($row = mysqli_fetch_array($result)){
    echo"<tr>";
    
    echo"<td>" . $row["name"] . "</td>";
    echo"<td>" . $row["initial_location"] . "</td>";
    echo"<td>" . $row["destination"] . "</td>";
    echo"<td>" . $row["date"] . "</td>";
    echo"<td>" . $row["distance"] . "</td>";
    echo"<td>" . $row["price"] . "</td>";
    echo"<td>" . $row["capacity"] . "</td>";
    echo"<td>" . $row["payment"] . "</td>";
    
    echo"</tr>";
}

    
?>  
                  
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
        
        <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
