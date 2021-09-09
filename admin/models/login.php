<?php

    session_start();

    include "../config/db.php";
    // include "../security.php";

    if(isset($_POST['login_btn'])){
        $username_login = $_POST['username'];
        $password_login = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username = '$username_login' AND password = '$password_login' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_fetch_array($query_run)){
            $_SESSION['username'] = $username_login;
            header("location: ../index.php");
        }else{
            $_SESSION['status'] = 'Incorrect Username and Password';
            header("location: ../login.php");
        }
    }

?>