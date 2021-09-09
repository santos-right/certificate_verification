<?php

    session_start();

    include "../config/db.php";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if(!empty($username) && !empty($email) && !empty($password) && !empty($cpassword)){
        if($password === $cpassword){
            $query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($conn,$query);

            if($query_run){
                $_SESSION['success'] = "Registration Successfully now Log in";
                header("location: ../login.php");
            }else{
                $_SESSION['status'] = "Not successfully";
                header("location: ../register.php");
            }
        }else{
            $_SESSION['status'] = "password and confirm password does not match";
            header("location: ../register.php");
        }
    }else{
        $_SESSION['status'] = "All fields are required";
        header("location: ../register.php");
    }


?>