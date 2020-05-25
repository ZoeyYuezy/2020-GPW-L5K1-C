<?php

require('db.php');

if ($_POST['submit']) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    
    // 2. Do a query
    $query  = "INSERT INTO ex (name, number ) "; 
    $query .= "VALUES ('$name', '$number' ) ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>