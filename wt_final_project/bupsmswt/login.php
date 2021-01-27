<?php

session_start();

require_once 'dbcon.php';

if (isset($_SESSION['login_id'])) {

    header('location: admin');
}


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];



    $email_check = mysqli_query($conn, "SELECT * FROM `userswt` WHERE `email`='$email'");

    if (mysqli_num_rows($email_check) > 0) {

        $row = mysqli_fetch_assoc($email_check);

        //print_r($row);
        // print_r($row['password']);
        //print_r($row['email']);

        if ($row['password'] == $password) {

            $_SESSION['login_id'] = $row['id'];

            header('location:admin');  //er vitore onno file thakle,/file name dite hobe  


        } else {
            $password_error = 'Wrong Password!';
        }
    } else {
        $email_error = 'Wrong Email ID!';
    }
}



?>









<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css?v= <?php echo time(); ?>">

    <title>Hello, world!</title>
</head>

<body class="bodycolor">

    <div class="container">

        <a href="resister.php" class="register button">Resister</a>
        <a href="index.php" class="home button">Home</a>


        <h2 class="text-center">User Login Form</h2>
        <div class="">
            <form action="" method="POST">

                <div class="text-center">
                    <input type="email" placeholder="Email" class="form-control" name="email" required>

                    <span class="error">
                        <?php
                        if (isset($email_error)) {
                            echo $email_error;
                        }

                        ?>
                    </span>
                </div>
                <br>
                <br>
                <div class="text-center">
                    <input type="password" placeholder="Password" class="form-control" name="password" required>

                    <span class="error">
                        <?php
                        if (isset($password_error)) {
                            echo $password_error;
                        }

                        ?>
                    </span>
                </div>
                <br>
                <br>
                <div class="text-center">
                    <input type="submit" value="Login" class="login button" name="login">
                </div>



            </form>
        </div>

        <br>
        <br>
        <br>


    </div>
    <footer class="stycky_footer">
        <p class="text-center">All Right Reserved &copy; BUP 2018- <?= date('Y')   ?>
        </p>

    </footer>

    
</body>

</html>