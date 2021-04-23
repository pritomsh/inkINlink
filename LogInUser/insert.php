<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'inkinlink') or die ('Unable to connect');

?>

<?php
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

    $select = mysqli_query($conn," SELECT * FROM registration WHERE email = '$email' AND password = '$password' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["email"] = $row['email'];
       $_SESSION["password"] = $row['password'];
        $_SESSION["username"] = $row['username'];
        $_SESSION["username"] = $row['f_name'];
        $_SESSION["username"] = $row['username'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "logInForm.php" ';
        echo '</script>';
    }
    }


    if(isset($_SESSION["username"])){
        header("Location:/inkINlink/afterLogIn/inkINlink.php");

    }
?>
