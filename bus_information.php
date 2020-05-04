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

// 2. Do a query
$query  = "SELECT bus_information.type, bus_information.number, routline.initial_location, routline.destination, routline.date, routline.price, driver.name "; 
$query .= "FROM (bus_information ";
$query .= "JOIN routline ";
$query .= "ON bus_information.r_id = routline.id) ";
$query .= "JOIN driver ";
$query .= "ON bus_information.d_id = driver.d_id ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bus Information</title>
<link type="text/css" rel="stylesheet" href="style.css">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
    </head>
    <body>
        <table class="table table-bordered table-striped with-check">
            <thead>
                <tr>
                <th>Bus Type</th>
                <th>Bus Number</th>
                 <th>Start</th>
                <th>End</th>
                <th>Date</th>
                <th>Price</th>
                <th>Driver</th>
                </tr>    
            </thead>

<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["type"] . "</td>";
    echo "<td>" . $row["number"] . "</td>";
     echo "<td>" . $row["initial_location"] . "</td>";
    echo "<td>" . $row["destination"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
}
    
?>
    
</table>
        
    
<?php

// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);

?>
    
    </body>
</html>