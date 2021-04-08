<html>

<head>
    <title>Log In Form </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssFile/logInForm.css">
    


</head>

<body>
    <div class="box">
        <form method="POST" action="insert.php">
            <h1>Log In</h1>

            <input type="text" id="fname" name="email" placeholder="Email">
            <input type="password" id="pwd" name="password" placeholder="Password">

            <!--        <input type="submit" value="Sign" name="submit">-->
            <button class="btn1" name="login">LogIn</button>

            <h6>Or Sign in with</h6>


            <section id="new">

                <div class="row fontawesome-icon-list">

                    <div class="icon">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>

                    <div class="icon">
                        <i class="fa fa-twitter"></i>
                    </div>

                    <button class="btn">
                        <i class="fa fa-google"></i>

                    </button>
                </div>

            </section>
        </form>

        <h6>Don't have account </h6>
        <input type="submit" value="Registration Here " name="submit">
    </div>



</body>

</html>
