<?php

include ("connection.php");
$sql = "SELECT id, email, password FROM registration";
$result = $conn->query($sql);
?>




<?php
if ($result->num_rows > 0) {
    echo "<table border='2'>
    <tr><th>ID</th>
    <th>Name</th> 
    <th>Password</th> 
    <th>Operation</th> 
    </tr>";
    
    
    
    // output data 
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" 
            . $row["email"]. "</td><td> " 
            . $row["password"]. "</td><td>
            <a href = 'delete.php?rn=$row[email]'>Delete</td> <td>";
        
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();



?>
