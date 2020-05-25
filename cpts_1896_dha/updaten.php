<?php

require('db.php');


if ($_POST['submit']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];

    
    // 2. Do a query
    $query  = "UPDATE ex SET "; 
    $query .= "id = '$id', "; 
    $query .= "name = '$name', "; 
    $query .= "number = '$number' ";
    $query .= "WHERE id = $id";

    echo $query;

    $result = mysqli_query($connection, $query);
    
    die('stop');
}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, name, number "; 
$query .= "FROM ex ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("1query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="updaten.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Type of Name: <input type="text" name="name" value="<?php echo $row["name"]; ?>"> <br/>
    Number: <input type="text" name="number" value="<?php echo $row["number"]; ?>"> <br/>
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>