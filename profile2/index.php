<?php
include_once("config.php");
include_once("function.php");
check_login_user();
$result = mysqli_query($mysqli, "SELECT * FROM registration ORDER BY id DESC");
?>



<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/inkINlink/inkINlink.php">INK In Link</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/inkINlink/inkINlink.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inkINlink/profile.html">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trends</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Catagories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Hero Section -->

        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <!--            <h2 class="font-weight-bold mt-4">Sunit Corneleous</h2>-->

                            <?php 

                            echo'<br>';
                            echo '' . $_SESSION['password'].'<br/>';        
                            echo '' . $_SESSION['email'].'<br/>';        
                            echo '' . $_SESSION['username'].'<br/>';   
                            echo '' . $_SESSION['f_name'].'<br/>';   
                            echo '' . $_SESSION['l_name'].'<br/>';   

     
                            ?>  


                            <li><a href="update.php"><i class="far fa-edit fa-1.5x mb-3">Update</i></a></li>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-white rounded-right">
                        <h3 class="mt-3 text-center">Information</h3>
                        <hr class="bg-primary">
                        <!--
<div class="row">
<div class="col-sm-6">
<p class="font-weight-bold">Email:</p>
<h6 class="text-muted">abcd@gmail.com</h6>
</div>
<div class="col-sm-6">
<p class="font-weight-bold">Phone:</p>
<h6 class="text-muted">12345678910</h6>
</div>
</div>
-->


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




                        <?php 
                        echo '' . $_SESSION['email'].'<br/>';        
                        ?>  


                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-sm-10">
                                <p class="font-weight-bold">Bio:</p>
                                <h6 class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                                    necessitatibus eligendi consequatur sint sequi blanditiis eveniet officiis
                                    cupiditate, quasi veritatis omnis ullam architecto voluptates reprehenderit!</h6>
                            </div>

                        </div>
                        <div>
                            <hr class="bg-primary">
                            <ul class="list-unstyled d-flex justify-content-center mt-4">
                                <li><a href="https://facebook.com"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bootstrap js, jquery, popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>

    </body>

</html>