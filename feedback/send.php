<?php
include ("connection.php");


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "insert into feedback values('','$name', '$email', '$message')";

$data = mysqli_query($conn,$sql);

if ($data) {
    
header("location: /inkINlink/inkINlink.php");	
	
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>