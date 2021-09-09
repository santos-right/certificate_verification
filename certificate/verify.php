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
    <!-- <link rel="stylesheet" href="css/verify.css"> -->
    <title>Certification Number</title>
</head>
<body>

    <div class="container form-verification">
        <form class="form-verified">
            <div class="wrapper">
                <h6>Certificate Verified</h6>
                <hr>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['full_name']; ?>" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['email']; ?>" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-bullseye"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['course']; ?>" aria-describedby="basic-addon1" disabled>
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-clock"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['date']; ?>" aria-describedby="basic-addon1" disabled>
                </div>
                <a href="index.php" class="btn back-button" role="button" aria-pressed="true">Back</a>
            </div>
        </form>
    </div>

    
</body>
</html>