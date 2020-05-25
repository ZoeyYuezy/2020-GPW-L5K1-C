<?php

require('includes/db.php');

$deleteid = $_GET['id'];

// 2. Do a query
$query  = "DELETE FROM bi "; 
$query .= "WHERE id = $deleteid";

$result = mysqli_query($connection, $query);
echo $query;
if (!$result) {
    die("query is wrong");
}



// 5. close db connection
mysqli_close($connection);

?>