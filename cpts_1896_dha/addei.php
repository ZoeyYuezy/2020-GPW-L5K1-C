<?php

require('includes/db.php');

if ($_POST['submit']) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $position = $_POST['position'];
    
    // 2. Do a query
    $query  = "INSERT INTO ei (name, gender, birth, position ) "; 
    $query .= "VALUES ('$name', '$gender', '$birth', '$position' ) ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>