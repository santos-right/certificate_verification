<?php

    session_start();

    include_once "../../admin/config/db.php";

    // $query = "SELECT * FROM certificate";
    // $query_run = mysqli_query($conn, $query);

    if(isset($_POST['verify_id'])){
        $verify_id = $_POST['verify_id'];
        $query = "SELECT * FROM certificate WHERE certificate_no = '$verify_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) !== 0){
            $certificate = mysqli_fetch_assoc($query_run);
            // echo $certificate['full_name'];

            $_SESSION['full_name'] = $certificate['full_name'];
            $_SESSION['email'] = $certificate['email'];
            $_SESSION['course'] = $certificate['course'];
            $_SESSION['date'] = $certificate['date'];

            header('location: ../verify.php');
        }else{
            $_SESSION['status'] = "No Record Found";
            header('location: ../index.php');
        }
    }
?>