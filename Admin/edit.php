<?php
include_once("config.php");
if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$f_name = mysqli_real_escape_string($mysqli, $_POST['f_name']);
	$l_name = mysqli_real_escape_string($mysqli, $_POST['l_name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	

	if(empty($email) || empty($username) || empty($f_name) || empty($l_name) || empty($gender)  ) {

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($username)) {
			echo "<font color='red'>User Name field is empty.</font><br/>";
		}
        
        
        if(empty($f_name)) {
			echo "<font color='red'>First name  field is empty.</font><br/>";
		}

		if(empty($l_name)) {
			echo "<font color='red'>last  Name field is empty.</font><br/>";
		}
        if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}

		
	} else {
		$result = mysqli_query($mysqli, "UPDATE registration SET f_name='$f_name',l_name='$l_name',email ='$email',username = '$username', gender = '$gender' WHERE id=$id");

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
	$l_name = $res['l_name'];
	$email = $res['email'];
	$username = $res['username'];
	$gender = $res['gender'];
	
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
				<td>First Name</td>
				<td><input type="text" name="f_name" class="form-control" value="<?php echo $f_name;?>" required></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="l_name" class="form-control" value="<?php echo $l_name;?>" required></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control" value="<?php echo $email;?>" required></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" class="form-control" value="<?php echo $username;?>" required></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" class="form-control" value="<?php echo $gender;?>" required></td>
			</tr>
			
			
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" style="float:right;"></td>
			</tr>
		</table>
	</form>
	<a href="user_list.php" class="btn btn-info" role="button" style="float:right;">Home Page</a>
	
    </div>
</body>
</html>
