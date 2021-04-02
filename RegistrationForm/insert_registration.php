<?php
include ("connection.php");


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$gender = $_POST['gender'];


$sql = "insert into registration values('','$f_name', '$l_name', '$email', '$user_name', '$password', '$re_password', '$gender' )";

$data = mysqli_query($conn,$sql);

if ($data) {
    
	
	header("location: /inkINlink/home.php");
	
//    echo "hello";
	
	
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>