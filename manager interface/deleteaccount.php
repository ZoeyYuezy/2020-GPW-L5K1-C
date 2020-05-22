<?php


require_once('db.php');



$id = $_GET['id'];


$query = "DELETE FROM users ";
$query.= "WHERE id = $id";

//echo $query;
    
 echo "<script>alert('Delete successful!');history.back();</script>";

mysqli_query($connection, $query);

//5. close db connection
mysqli_close($connection);

?>



