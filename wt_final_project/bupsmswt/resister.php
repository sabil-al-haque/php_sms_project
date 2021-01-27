<?php

require_once 'dbcon.php';



if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $photo = $_POST["photo"];

    //$photo = $_FILES['photo']['name'];
    //print_r($photo);

    $photo = explode('.', $_FILES['photo']['name']);
    $photo = end($photo);

    //echo $photo; = jpg

    $photo_name = $name . '.' . $photo;
    // echo $photo_name;

    //print_r($_FILES); ekhan theke img er tmp_name ta pawya jay









    //exit();


    // echo $name;
    /*
    $photo = explode('.', $_POST['photo']);
    $ext = end($photo);
    $photo_name = $name . '.' . ($ext);
*/


    if (!$name == "") {

        if (!$email == "") {

            if (!$password == "") {

                if (strlen($password)  > 7) {


                    if (!$cpassword == "") {

                        if (strlen($cpassword)  > 7) {

                            if ($password == $cpassword) {
                                //echo 'Yes';
                                $query = mysqli_query($conn, "SELECT * FROM `userswt` WHERE `email`='$email'");




                                if (mysqli_num_rows($query) == 0) {

                                    $result = mysqli_query($conn, "INSERT INTO `userswt`(`name`, `email`, `password`, `photo`) VALUES ('$name','$email','$password','$photo_name')");

                                    if ($result) {
                                        //echo 'Data insert success';
                                        $success = 'Data insert success';
                                        move_uploaded_file($_FILES['photo']['tmp_name'], 'images/users/' . $photo_name);
                                    } else {
                                        //echo 'Failed!';
                                        $error = 'Data insert Failed!';
                                    }
                                } else {
                                    $wrong_email = 'This email is already exist';
                                }
                            } else {
                                //echo 'Password doesnt match';
                                $cmatch_error = 'Password doesnt match';
                            }
                        } else {
                            //echo 'Confirm Password must be atleast 8 charecter';
                            $cplen_error = 'Confirm Password must be atleast 8 charecter';
                        }
                    } else {
                        //echo 'Confirm Password field is required';
                        $cpassword_error = 'Confirm Password field is required';
                    }
                } else {
                    //echo 'Password must be atleast 8 charecter';
                    $plen_error = 'Password must be atleast 8 charecter';
                }
            } else {
                //echo 'Password field is required';
                $password_error = 'Password field is required';
            }
        } else {
            //echo 'Email field is required';
            $email_error = 'Email field is required';
        }
    } else {
        //echo 'Name field is required';
        $name_error = 'Name field is required';
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

        <a href="login.php" class="login button">Login</a>
        <a href="index.php" class="home button">Home</a>


        <div class="row">
            <div>
                <?php
                if (isset($success)) {
                    echo '<p class="alert alert-success" >' . $success . '</p>';
                }
                ?>
            </div>

            <div>
                <?php
                if (isset($error)) {
                    echo '<p class="alert alert-denger" >' . $error . '</p>';
                }
                ?>
            </div>
        </div>


        <h2 class="text-center">User Resistration Form</h2>
        <div class="text-center">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                <div class="">
                    <label>Name</label>
                    <div>
                        <input type="text" placeholder="Name" name="name" style="display: inline-block;">

                        <span class="error">

                            <?php

                            if (isset($name_error)) {
                                echo $name_error;
                            }

                            ?>

                        </span>

                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="">Email</label>
                    <div class="">
                        <input type="email" placeholder="Email" name="email">
                        <span class="error">

                            <?php

                            if (isset($email_error)) {
                                echo $email_error;
                            }

                            ?>

                        </span>

                        <span class="error">

                            <?php

                            if (isset($wrong_email)) {
                                echo $wrong_email;
                            }

                            ?>

                        </span>

                    </div>
                </div>

                <div class="">
                    <label for="" class="">Password</label>
                    <div class="col-sm-4">
                        <input type="password" placeholder="Password" name="password">
                        <?php

                        if (isset($password_error)) {
                            echo $password_error;
                        }

                        ?>

                        </span>
                        <?php

                        if (isset($plen_error)) {
                            echo $plen_error;
                        }

                        ?>

                        </span>


                    </div>
                </div>
                <div class="">
                    <label for="" class="">Confirm Password</label>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Confirm Password" name="cpassword">
                        <?php

                        if (isset($cpassword_error)) {
                            echo $cpassword_error;
                        }

                        ?>

                        </span>
                        <?php

                        if (isset($cplen_error)) {
                            echo $cplen_error;
                        }

                        ?>

                        </span>
                        <?php

                        if (isset($cmatch_error)) {
                            echo $cmatch_error;
                        }

                        ?>

                        </span>
                    </div>
                </div>
                <div class="">
                    <label for="" class="">Photo</label>
                    <div class="">
                        <input type="file" name="photo">
                    </div>
                </div>
                <div class="">

                    <div class="">
                        <input type="submit" value="Register" class="register button" name="register">
                    </div>
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