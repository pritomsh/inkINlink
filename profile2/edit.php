<?php
include_once("config.php");
include_once("function.php");
check_login_user();
$result = mysqli_query($mysqli, "SELECT * FROM registration ");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
   
   
   <form class="box" action="update.php" method="post">
                <h2>Registration</h2>
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <p>First name</p>
                    <input type="text" value="<?php echo $_SESSION['f_name'];?>" class="name" id="f_name" name="f_name">
                </div>
                <p>Last name </p>
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" value="<?php echo $_SESSION['l_name'];?>" class="name" id="l_name" name="l_name">
                </div>
<p>Email </p>
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" value="<?php echo $_SESSION['email'];?>" required class="text-name" id="email" name="email">
                </div>
                <p>User Name </p>
                <div class="input-name">
                    <i class="fa fa-check username"></i>
                    <input type="text" value="<?php echo $_SESSION['username'];?>" required id="user_name" name="username" class="name">
                </div>
                <p>Gender </p>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="text" value="<?php echo $_SESSION['gender'];?>" class="text-name" id="gender" name="gender" required>
                </div>
                

                <div class="input-name">
                    <input class="button" type="submit" value="Update">
                </div>          
            </form>
   
    
                               
                               
    
</body>
</html>