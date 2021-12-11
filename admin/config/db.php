<?php
    // session_start();

    $conn = mysqli_connect("localhost", "root", "", "admin_panel");

    if(!$conn){
        echo "Database connection failed...".mysqli_connect_error();
    }
?>