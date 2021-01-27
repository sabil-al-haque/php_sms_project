<?php

session_start();

require_once '../dbcon.php';

if (!isset($_SESSION['login_id'])) {

    header('location: ../login.php');
}

$user = $_SESSION['login_id'];


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../style.css?v= <?php echo time(); ?>">

    <title>cssBUP, world!</title>
</head>

<body class="bodycolor ">
    <nav class="clearfix fixed-width ">
        <div class="left text-center">
            <a href="../index.php" class="navbar-brand"><img style="width: 60px; margin-top:8px;" src="../img/logo.png" alt=""> SMS of BUP</a>
        </div>
        <div class=" right">


            <ul class="headerlink">
                <li><a href=""><i class="fa fa-user"></i>

                        <?php

                        $userName = mysqli_query($conn, "SELECT * FROM `userswt` WHERE `id`= '$user'");
                        $userData = mysqli_fetch_assoc($userName);

                        echo $userData['name'];

                        ?>

                    </a></li>

                <li><a href="userProfile.php"><i class=" fa fa-user"></i> My Profile</a></li>

                <li><a href="logout.php"><i class=" fa fa-power-off"></i> Exit</a></li>
            </ul>

        </div>
    </nav>

    <div class="fixed-width clearfix">
        <div class="row left clearfix fixed-width">
            <div class="left">
                <div class="link">

                    <a href="index.php"><i class=" fa fa-power-off"></i> Dashboard</a>

                    <a href="addstudent.php"><i class=" fa fa-user-plus"></i> Add Student</a>

                    <a href="allstudents.php"><i class=" fa fa-users"></i> All Student</a>


                    <a href="../resister.php"><i class=" fa fa-user-plus"></i> Add User</a>

                    <a href="allusers.php "><i class=" fa fa-users"></i> All User</a>

                </div>
            </div>