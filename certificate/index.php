<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Certification Number</title>
</head>
<body>

    <div class="container form-verification">
        <form class="form-container" action="models/verification.php" method="POST">
            <?php

                if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                    echo '<h2 class="text-danger"> '.$_SESSION['status'].'</h2>';
                    unset($_SESSION['status']);
                }

            ?>
            <h1>Verify Your Certificate</h1>
            <span>verify any certificate with nine digit code written on the certificate</span>
            <div class="form-group verification">
                <input type="text" name="verify_id" class="form-control verify-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Verification Code eg.">
                <button class="search-icon"> <i class="fas fa-search "></i> </button>
            </div>
            <button type="submit" name="verify_btn" class="btn btn-lg btn-block verify-button" role="button" aria-pressed="true">Verify</button>
        </form>
    </div>

</body>
</html>