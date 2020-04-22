<?php
// 1. Open database connection
$dbhost = "localhost";
$dbuser = "zeng-yue2";
$dbpass = "zhpf6700";
$dbname = "2201713130225";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}
?>