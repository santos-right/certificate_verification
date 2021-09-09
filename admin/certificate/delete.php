<?php

    session_start();

    include_once "../config/db.php";

    if(isset($_POST['deletebtn'])){
        $id = $_POST['delete_id'];

        $query = "DELETE FROM certificate WHERE id = '$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            $_SESSION['success'] = "Your Data is Deleted Successfully";
            header("location: ../tables.php");
        }else{
            $_SESSION['status'] = "Your Data is Not Deleted";
            header("location: ../tables.php");
        }
    }    
?>