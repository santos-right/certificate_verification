<?php

    session_start();

    include_once "../config/db.php";
    
    $register_name = $_POST['full_name'];
    $register_email = $_POST['email'];
    $register_course = $_POST['course'];
    $register_date = $_POST['date'];

    if(!empty($register_name) && !empty($register_email) && !empty($register_course) && !empty($register_date)){
        if(filter_var($register_email, FILTER_VALIDATE_EMAIL)){ // if email is valid
            // let's check that email already exist in the database
            $sql = mysqli_query($conn, "SELECT email FROM certificate where email = '{$register_email}'");
            if(mysqli_num_rows($sql) > 0){ // if email already exist 
                echo "$email - This email already exist";
            }else{
                $register_certificate = rand(0,010000000000);
                // echo $register_certificate;
                // return print_r($_POST);
                $query = "INSERT INTO certificate (full_name, email, course, date, certificate_no) VALUES ('$register_name','$register_email','$register_course','$register_date','$register_certificate')";
                $query_run = mysqli_query($conn, $query);

                // echo "Error: ". mysqli_error($conn);

                if($query_run){
                    $_SESSION['success'] = "Certification No Genereted Successfully";
                    header("location: ../index.php");
                }else{
                    $_SESSION['status'] = "Error: ". mysqli_error($conn);
                    header("location: ../index.php");
                }
            }
        }else{
            echo "$resgister_email - This is not a valid email!";
        }
    }else{
        $_SESSION['status'] = "All fields are required";
        header("location: ../index.php");
    }


?>
