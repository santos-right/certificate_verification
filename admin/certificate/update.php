<?php

    session_start();

    include_once "../config/db.php";

    if(isset($_POST['updatebtn'])){

        $id = $_POST['edit_id'];
        $full_name = $_POST['edit_full_name'];
        $email = $_POST['edit_email'];
        $course = $_POST['edit_course'];
        $date = $_POST['edit_date'];

        $query = "UPDATE certificate SET full_name = '$full_name', email = '$email', course = '$course', date = '$date' WHERE id = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            $_SESSION['success'] = "Your Data is Updated";
            header('location: ../tables.php');
        }else{
            $_SESSION['status'] = "Your Data is Not Updated";
            header('location: ../tables.php');
        }
    }
?>