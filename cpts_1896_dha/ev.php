<?php

require('db.php');

// 2. Do a query
$query  = "SELECT id, name, number "; 
$query .= "FROM ex ";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");

}
?>

<html>
    <head>
        <title>Existing Vechicies</title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body bgcolor=" LightCyan">      
        <h1 style="text-align:center">Existing Vechicies</h1>
        <hr/>
 <table width="80%" border="double" cellpadding="2" cellspacing="1" align="center" >
     <tr>
     <td>ID</td>
     <td>Type of Car</td>
     <td>Number</td> 
     <td>Update</td> 
     </tr>          
            
            <?php
     
// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" , $row["id"] . "</td>";
    echo "<td>" , $row["name"] . "</td>";
    echo "<td>" , $row["number"] ."</td>";
    echo "<td><a href='updaten.php?id=" . $row["id"] ."'>Update</a></td>";
    echo "</tr>";
    
}
?>

           
    </table>
     <form action='forme.html' autocomplete="off" class='button'>
         <input type='submit' value='Insert'>
  
<?php

// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);

?>
    
