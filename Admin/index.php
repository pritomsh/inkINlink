<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
session_start();
if (isset($_POST['submit'])) {
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE user_name='$user_name' and password='$password'";

	$result = mysqli_query($mysqli, $query);
	$rows = mysqli_num_rows($result);

	if ($rows == 1) {
		$_SESSION['user_name'] = $user_name;
        $_SESSION['password'] = $password;
		header("Location: user_list.php");
	}else {
		echo "error";
	}
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Register</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="login">
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3><strong>Sign in</strong></h3>

                                        <i class="fa fa-empire"></i>
                                        <h2>Admin Login</h2>

                                        <p><strong>Enter username and password :</strong></p>
                                    </div>
                                    <div class="form-top-right"> </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">



                                        <div class="group">
                                            <input type="text" name="user_name" placeholder='Username' required>
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="group">
                                            <input name="password" type="password" placeholder="Password" required><i class="fa fa-lock"></i>
                                        </div>

                                        <button type="submit" class="btn" name="submit"><strong>Sign in</strong></button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
