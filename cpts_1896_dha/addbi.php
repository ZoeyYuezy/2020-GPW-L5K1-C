<?php

require('includes/db.php');

if ($_POST['submit']) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $registered = $_POST['registered'];
    $tax = $_POST['tax'];
    $legal = $_POST['legal'];
    
    // 2. Do a query
    $query  = "INSERT INTO bi (name, address, registered, tax, legal ) "; 
    $query .= "VALUES ('$name', '$address', '$registered', '$tax', '$legal' ) ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>