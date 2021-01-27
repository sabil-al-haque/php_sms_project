<?php
require_once 'header.php';


$id = base64_decode($_GET['id']);
//echo $id;


$userInfo = mysqli_query($conn, "SELECT * FROM `userswt` WHERE `id`= '$id'");

$row = mysqli_fetch_assoc($userInfo);

//print_r($row);

//echo $row['class'] == 'Class 4' ? 'Yes' : 'No';


if (isset($_POST['UpdateUserInfo'])) {



    
    $name = $_POST['name'];
    $email = $_POST['email'];
    



    //$photo = $_FILES['photo'];

    //photo ke post diye dhora jay nah,FILE die dhorte hoy,because photo hoilo ekta array element.

    //print_r($photo);





    // $photo = explode('.', $_FILES['photo']['name']);

    // $photo = end($photo);

    // $photo_name = $roll . '.' . $photo;




    $Update = mysqli_query($conn, "UPDATE `userswt` SET `name`='$name',`email`='$email' WHERE `id`='$id'");


    if ($Update) {

        header('location: userProfile.php');

        //$success = 'Data insert success!';

        //move_uploaded_file($_FILES['photo']['tmp_name'], '../images/students/' . $photo_name);
    } else {
        $fail = 'Data Update failed';
    }
}



?>








<div class="col-sm-10">
    <div class="content">
        <h1 class="text-primary">
            <i class="fa fa-user-plus"> Update User Info </i>
        </h1>

        <ol class="breadcrumb ">

            <li class="active"><a href="index.php"><i class=" fa fa-users"></i>Dashboard</a></li>

            <li class="active"><a href="allusers.php"><i class=" fa fa-users"></i>All Users</a></li>


            <li class="active"><i class=" fa fa-user-plus"></i>Update Users Info</li>
        </ol>


        <h2>
            <div class="row">


                <div>
                    <?php
                    if (isset($fail)) {
                        echo '<p class="alert alert-denger" >' . $fail . '</p>';
                    }
                    ?>
                </div>
            </div>
        </h2>


        ------------------
        <h2 class="text-center" style="margin-left: 150px;">Add Student By Form</h2>
        <div class="">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">


                <div class=" form-group">
                    <label for="" class="">Name</label>
                    <div class="">
                        <input type="text" placeholder="Name" name="name" class="form-control" value="<?= $row['name']; ?>">


                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="">Email</label>
                    <div class="">
                        <input type="text" placeholder="Email" name="email" class="form-control" required value="<?= $row['email']; ?>">


                    </div>
                </div>





                <div class="form-group">

                    <div class="">
                        <input type="submit" value="Update" class="" name="UpdateUserInfo">
                    </div>
                </div>



            </form>
        </div>



    </div>
</div>


<?php
require_once 'footer.php'


?>