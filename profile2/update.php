<?php
include ("config.php");


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$gender = $_POST['gender'];


$sql = "UPDATE registration SET f_name='$f_name',l_name='$l_name',email ='$email',username = '$username', password = '$password";

$data = mysqli_query($conn,$sql);

if ($data) {
    
header("location: /inkINlink/inkINlink.php");	
	
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>