<?php

include ("connection.php");

error_reporting(0);

$rm = $_GET['rn'];

$sql = "DELETE FROM registration WHERE email = '$rm'";
$data = mysqli_query($conn,$sql);
if($data)
{
    echo "Deleted";
}
else
{
    echo "Fail";
}
?>
