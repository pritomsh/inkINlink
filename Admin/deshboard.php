<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Deshboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            #mySidenav a {
                position: absolute;
                left: -80px;
                transition: 0.3s;
                padding: 15px;
                width: 100px;
                text-decoration: none;
                font-size: 15px;
                color: white;
                border-radius: 0 5px 5px 0;
            }

            #mySidenav a:hover {
                left: 0;
            }

            #login {
                top: 20px;
                background-color: #4CAF50;
            }

            #blog {
                top: 80px;
                background-color: #2196F3;
            }

            #projects {
                top: 140px;
                background-color: #f44336;
            }

            #contact {
                top: 200px;
                background-color: #555
            }

            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .navbar {
                overflow: hidden;
                background-color: #333;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .navbar a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .navbar a:hover {
                background: #f1f1f1;
                color: black;
            }

            .navbar a.active {
                background-color: #4CAF50;
                color: white;
            }

            .main {
                padding: 16px;
                margin-bottom: 30px;
            }

        </style>
    </head>

    <body>





        <div style="margin-left:80px;">

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">.

                    <div id="mySidenav" class="sidenav">
                        <a href="index.php" id="login">Log In</a>
                        <a href="#" id="blog">Blog</a>
                        <a href="#" id="projects">Projects</a>
                        <a href="#" id="contact">Contact</a>
                    </div>

                </div>
                <div class="col-sm-8">.col-sm-8</div>
                <div class="col-sm-2">
                    <?php
                    $mydate=getdate(date("U"));
                    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
                    ?></div>
            </div>
        </div>
        <div class="navbar">
<!--
            <a href="#home" class="active">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
-->


        </div>

    </body>

</html>
