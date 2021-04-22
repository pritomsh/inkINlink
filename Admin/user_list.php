<?php
include_once("config.php");
include_once("function.php");
check_login_user();
$result = mysqli_query($mysqli, "SELECT * FROM registration ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:20px;">
        
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>User Name</th>
                    <th>Gender</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                echo "User Detail";
			while($res = mysqli_fetch_array($result)) {
                
                
                
				echo "<tr>";
				echo "<td>".$res['f_name']."</td>";
				echo "<td>".$res['l_name']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['username']."</td>";
				echo "<td>".$res['gender']."</td>";
				
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			}
			?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>
    </div>
</body>

</html>
