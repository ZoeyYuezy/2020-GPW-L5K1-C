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

<html>
    <head>
        <title>Bus Information</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <table class="larry">
            <thead>
                <td>Bus Type</td>
                <td>Bus Number</td>
                 <td>Start</td>
                <td>End</td>
                <td>Date</td>
                <td>Price</td>
                <td>Driver</td>
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