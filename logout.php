<?php
    session_start();
    if(session_destroy()){
        header("location: /inkINlink/inkINlink.php");
    }

?>