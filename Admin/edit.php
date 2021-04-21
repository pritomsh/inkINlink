<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$f_name = mysqli_real_escape_string($mysqli, $_POST['f_name']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	

	if(empty($f_name) || empty($password)) {

		if(empty($f_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($password)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		
	} else {
		$result = mysqli_query($mysqli, "UPDATE registration SET f_name='$f_name',password='$password' WHERE id=$id");

		header("Location: user_list.php");
	}
}
?>

<?php
$id = $_GET["id"];
$result = mysqli_query($mysqli, "SELECT * FROM registration WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$f_name = $res['f_name'];
	$password = $res['password'];
	
}
?>


<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
	<form name="form1" method="post" action="edit.php">
		  <table class="table">
			<tr>
				<td>Name</td>
				<td><input type="text" name="f_name" class="form-control" value="<?php echo $f_name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="password" class="form-control" value="<?php echo $password;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" style="float:right;"></td>
			</tr>
		</table>
	</form>
	<a href="index.php" class="btn btn-info" role="button" style="float:right;">Home Page</a>
	
    </div>
</body>
</html>
