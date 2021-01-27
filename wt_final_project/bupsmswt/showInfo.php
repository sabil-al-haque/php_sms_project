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

        <a href="resister.php" class="register">Resister</a>
        <a href="login.php" class="login">Login</a>

        <h2 class="text-center">Bangladesh University of Professionals(BUP)</h2>

        <br>
        <br>


        <?php

        require_once 'dbcon.php';

        if (isset($_POST['show'])) {

            $class = $_POST['class'];
            $roll = $_POST['roll'];


            //print_r($class);

            $result = mysqli_query($conn, "SELECT * FROM `students` WHERE `roll` = '$roll' AND `class` = '$class'");


            //echo mysqli_num_rows($result);

            //$row = mysqli_fetch_assoc($result);
            // print_r($row);
            //print_r('$row['name']);


            if (mysqli_num_rows($result) == 1) {
                //echo 'Yes';
                $row = mysqli_fetch_assoc($result);

        ?>


                <div class="div1">

                    <div class="">
                        <table class="">


                            <tr>

                                <th>Photo :</th>
                                <td class="photo"><img src="images/students/<?= $row['photo']; ?>" alt="" ></td>
                            </tr>
                            <tr>
                                <th>Roll :</th>
                                <td><?= $row['roll']; ?></td>

                            </tr>
                            <tr>
                                <th>Class:</th>
                                <td><?= $row['class']; ?></td>

                            </tr>



                            <tr>

                                <th>Name :</th>
                                <td><?= $row['name']; ?></td>
                            </tr>
                            <tr>

                                <th>fathers Name :</th>
                                <td><?= $row['fname']; ?></td>
                            </tr>
                            <tr>

                                <th>mothers Name :</th>
                                <td><?= $row['mname']; ?></td>
                            </tr>
                            <tr>

                                <th>address :</th>
                                <td><?= $row['address']; ?></td>
                            </tr>
                            <tr>

                                <th>Phone No :</th>
                                <td><?= $row['phone']; ?></td>
                            </tr>





                        </table>

                    </div>


                    <a href="index.php" class="refresh">Refresh</a>


                </div>







            <?php
            } else {
                //echo 'No';
                // JS likhar jonno php close korte hobe.
            ?>

                <script type="text/javascript">
                    alert('Wrong Information');

                    javascript: history.go(-1);
                </script>


        <?php
                //php abar start korte hobe.
            }
        }


        ?>





        <!-- <div class="col-sm-6 col-sm-offset-3">

            <div class="table-responsive">
                <table class="table table-bordered table-hover">


                    <tr>

                        <th>Photo</th>
                        <td><img src="images/students/2222.jpg" alt="" style="height:100px;"></td>
                    </tr>
                    <tr>
                        <th>Roll</th>
                        <td>1111</td>

                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>Onee</td>

                    </tr>



                    <tr>

                        <th>Name</th>
                        <td>uf,c,lc</td>
                    </tr>
                    <tr>

                        <th>fathers Name</th>
                        <td>uf,c,lc</td>
                    </tr>
                    <tr>

                        <th>mothers Name</th>
                        <td>uf,c,lc</td>
                    </tr>
                    <tr>

                        <th>address</th>
                        <td>uf,c,lc</td>
                    </tr>
                    <tr>

                        <th>Phone No</th>
                        <td>uf,c,lc</td>
                    </tr>





                </table>

            </div>


            <a href="index.php" class="btn btn-primary">Refresh</a>


        </div> -->

        <br>
        <br>
        <br>

        <footer >
            <p class="text-center">All Right Reserved &copy; BUP 2018- <?= date('Y')   ?>
            </p>

        </footer>
    </div>

   
</body>

</html>