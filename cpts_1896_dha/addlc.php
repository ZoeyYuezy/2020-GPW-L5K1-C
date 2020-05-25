<?php

require('includes/db.php');

if ($_POST['submit']) {
    $staff = $_POST['staff'];
    $customers = $_POST['customers'];
    $lcn = $_POST['lcn'];
    $status = $_POST['status'];
    
    // 2. Do a query
    $query  = "INSERT INTO le (staff, customers, lcn, status ) "; 
    $query .= "VALUES ('$staff', '$customers', '$lcn', '$status' ) ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>