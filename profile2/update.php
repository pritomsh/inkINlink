<?php
include ("config.php");
include_once("function.php");
check_login_user();
$result = mysqli_query($mysqli, "SELECT * FROM registration ");

$f_name = $_SESSION['f_name'];
$l_name = $_SESSION['l_name'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$gender = $_SESSION['gender'];
$id = $_SESSION['id'];


$sql = "UPDATE registration SET f_name='$f_name',l_name='$l_name',email ='$email',username = '$username', gender = '$gender' WHERE email=$email";

$data = mysqli_query($mysqli,$sql);

if ($data) {
    
header("location: index.php");	
	
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>