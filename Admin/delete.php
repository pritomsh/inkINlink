<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM registration WHERE id=$id");
header("Location:user_list.php");
?>
