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
                    <input type="text" value="<?php echo $_SESSION['f_name'];?>" class="name" id="f_name" name="f_name">
                </div>
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" value="<?php echo $_SESSION['l_name'];?>" class="name" id="l_name" name="l_name">
                </div>

                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" value="<?php echo $_SESSION['email'];?>" required class="text-name" id="email" name="email">
                </div>
                <div class="input-name">
                    <i class="fa fa-check username"></i>
                    <input type="text" value="<?php echo $_SESSION['username'];?>" required id="user_name" name="user_name" class="name">
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" value="<?php echo $_SESSION['password'];?>" class="text-name" id="password" name="password" required>
                </div>
                

                <div class="input-name">
                    <input class="button" type="submit" value="Registration">
                </div>          
            </form>
   
    
                               
                               
                                <?php 

                            echo'<br>';
                            echo '' . $_SESSION['f_name'].'<br/>';        
                            echo '' . $_SESSION['l_name'].'<br/>';        
                            echo '' . $_SESSION['email'].'<br/>';   
                            echo '' . $_SESSION['username'].'<br/>';   
                            echo '' . $_SESSION['password'].'<br/>';   

     
                            ?>  
    
</body>
</html>